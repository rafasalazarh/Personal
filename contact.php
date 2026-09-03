<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Método no permitido']);
    exit;
}

$raw = file_get_contents('php://input');
$data = json_decode($raw ?: '', true);

if (!is_array($data)) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Solicitud inválida']);
    exit;
}

$strlen = static function (string $value): int {
    return function_exists('mb_strlen') ? mb_strlen($value) : strlen($value);
};

$name = trim((string) ($data['name'] ?? ''));
$email = trim((string) ($data['email'] ?? ''));
$phone = trim((string) ($data['phone'] ?? ''));
$service = trim((string) ($data['service'] ?? ''));
$message = trim((string) ($data['message'] ?? ''));

$allowedServices = ['tour360', 'compra', 'venta', 'alquiler', 'airbnb', 'otro'];

if (
    $name === '' || $strlen($name) > 120
    || !filter_var($email, FILTER_VALIDATE_EMAIL)
    || $phone === '' || $strlen($phone) > 40
    || !in_array($service, $allowedServices, true)
    || $message === '' || $strlen($message) > 2000
) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'error' => 'Revisa los campos e inténtalo de nuevo.']);
    exit;
}

$dir = __DIR__ . DIRECTORY_SEPARATOR . 'data';
if (!is_dir($dir) && !mkdir($dir, 0755, true) && !is_dir($dir)) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'No se pudo guardar la consulta.']);
    exit;
}

$file = $dir . DIRECTORY_SEPARATOR . 'inquiries.json';
$entry = [
    'id' => bin2hex(random_bytes(8)),
    'createdAt' => gmdate('c'),
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'service' => $service,
    'message' => $message,
];

$fp = fopen($file, 'c+');
if ($fp === false) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'No se pudo guardar la consulta.']);
    exit;
}

try {
    if (!flock($fp, LOCK_EX)) {
        throw new RuntimeException('lock');
    }

    $contents = stream_get_contents($fp);
    $list = [];
    if (is_string($contents) && $contents !== '') {
        $decoded = json_decode($contents, true);
        $list = is_array($decoded) ? $decoded : [];
    }

    $list[] = $entry;
    rewind($fp);
    ftruncate($fp, 0);
    fwrite($fp, json_encode($list, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    fflush($fp);
    flock($fp, LOCK_UN);
} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'No se pudo guardar la consulta.']);
    fclose($fp);
    exit;
}

fclose($fp);

echo json_encode(['ok' => true]);
