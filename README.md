# Landing Page - Inmobiliaria Premium

Landing page moderna y responsive para una empresa inmobiliaria con todas las secciones esenciales.

## 🏠 Características

- **Diseño Moderno y Responsive**: Se adapta perfectamente a todos los dispositivos (móvil, tablet, desktop)
- **Sección Hero**: Banner principal impactante con llamadas a la acción
- **Banner de Información**: Estadísticas y logros de la empresa
- **Servicios**: Presentación de los servicios ofrecidos
- **Galería de Propiedades**: Muestra de propiedades destacadas con imágenes
- **Formulario de Contacto**: Formulario funcional para recibir consultas
- **Navegación Suave**: Scroll suave entre secciones
- **Menú Móvil**: Menú hamburguesa para dispositivos móviles
- **Animaciones**: Efectos visuales al hacer scroll

## 📁 Estructura del Proyecto

```
.
├── index.html      # Estructura HTML principal
├── styles.css      # Estilos CSS
├── script.js       # JavaScript para interactividad
└── README.md       # Este archivo
```

## 🚀 Cómo Usar

1. **Abrir el proyecto**: Simplemente abre el archivo `index.html` en tu navegador web
2. **Personalizar contenido**: 
   - Edita `index.html` para cambiar textos, información de contacto, etc.
   - Modifica `styles.css` para ajustar colores, fuentes y estilos
   - Actualiza las imágenes de propiedades con tus propias imágenes

## 🎨 Personalización

### Colores
Los colores principales están definidos en variables CSS al inicio de `styles.css`:
```css
:root {
    --primary-color: #2563eb;    /* Color principal */
    --secondary-color: #1e40af;  /* Color secundario */
    --accent-color: #f59e0b;     /* Color de acento */
}
```

### Imágenes
Las imágenes de propiedades usan URLs de Unsplash. Para usar tus propias imágenes:
1. Reemplaza las URLs en las etiquetas `<img>` dentro de `.property-image`
2. O crea una carpeta `images/` y referencia las imágenes localmente

### Información de Contacto
Edita la sección de contacto en `index.html` para actualizar:
- Teléfonos
- Emails
- Dirección
- Horarios

### Propiedades
Modifica las tarjetas de propiedades en la sección `#propiedades` para mostrar tus propiedades reales.

## 📱 Responsive Design

El diseño es completamente responsive y se adapta a:
- **Desktop**: 1200px+
- **Tablet**: 768px - 1199px
- **Móvil**: < 768px

## 🔧 Tecnologías Utilizadas

- HTML5
- CSS3 (Grid, Flexbox, Variables CSS)
- JavaScript (Vanilla)
- Google Fonts (Poppins)
- Unsplash (imágenes de ejemplo)

## 📝 Notas

- El formulario de contacto actualmente muestra una alerta. Para producción, necesitarás conectarlo con un backend o servicio de email.
- Las imágenes son de ejemplo de Unsplash. Reemplázalas con imágenes reales de tus propiedades.
- Todos los textos son ejemplos y deben ser personalizados según tu empresa.

## 🌐 Compatibilidad

Compatible con todos los navegadores modernos:
- Chrome
- Firefox
- Safari
- Edge

## 📞 Soporte

Para cualquier pregunta o personalización adicional, puedes modificar los archivos según tus necesidades.

---

**Desarrollado con ❤️ para Inmobiliaria Premium**


