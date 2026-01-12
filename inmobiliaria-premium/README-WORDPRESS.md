# Tema WordPress - Inmobiliaria Premium

## 📋 Explicación de la Estructura de WordPress

He convertido tu landing page en un **tema completo de WordPress**. Aquí te explico cómo funciona:

## 🗂️ Estructura de Archivos del Tema

```
inmobiliaria-premium/
├── style.css          # Estilos + Header del tema (OBLIGATORIO)
├── functions.php      # Funcionalidades del tema
├── header.php         # Encabezado del sitio
├── footer.php         # Pie de página
├── index.php          # Template principal (fallback)
├── front-page.php     # Template para página de inicio
└── js/
    └── script.js      # JavaScript del tema
```

## 📝 Archivos Explicados

### 1. **style.css** (OBLIGATORIO)
- **¿Por qué es importante?**: WordPress necesita este archivo para reconocer el tema
- **Header del tema**: Las primeras líneas (comentario CSS) contienen información del tema:
  ```css
  Theme Name: Inmobiliaria Premium
  Theme URI: ...
  Author: ...
  ```
- **Estilos**: Contiene todos los estilos CSS del tema

### 2. **functions.php**
- **Propósito**: Agrega funcionalidades al tema
- **Funciones principales**:
  - `inmobiliaria_premium_setup()`: Configuración básica (soporte para imágenes, menús, etc.)
  - `inmobiliaria_premium_scripts()`: Carga los CSS y JavaScript
  - `inmobiliaria_premium_widgets_init()`: Registra áreas de widgets
  - `inmobiliaria_premium_contact_form_handler()`: Procesa el formulario de contacto
  - `inmobiliaria_premium_customize_register()`: Agrega opciones al Customizer

### 3. **header.php**
- **Contiene**: Todo el código HTML del encabezado
- **Funciones WordPress**:
  - `wp_head()`: Inserta scripts y estilos necesarios
  - `bloginfo('name')`: Muestra el nombre del sitio
  - `wp_nav_menu()`: Muestra el menú de navegación
  - `home_url()`: URL del sitio

### 4. **footer.php**
- **Contiene**: Pie de página
- **Funciones WordPress**:
  - `wp_footer()`: Inserta scripts antes de cerrar el body
  - `bloginfo()`: Información del sitio

### 5. **front-page.php**
- **Propósito**: Template especial para la página de inicio
- **Ventaja**: WordPress lo usa automáticamente cuando está configurada una página estática como inicio
- **Contenido**: Todo el contenido del landing page (hero, servicios, propiedades, contacto)

### 6. **index.php**
- **Propósito**: Template de respaldo (fallback)
- **Uso**: Se usa si no existe un template más específico

## 🚀 Cómo Instalar el Tema

### Paso 1: Subir el Tema
1. Comprime la carpeta `inmobiliaria-premium` en un archivo ZIP
2. Ve a **Apariencia > Temas** en tu WordPress
3. Haz clic en **Añadir nuevo > Subir tema**
4. Selecciona el archivo ZIP y sube el tema

### Paso 2: Activar el Tema
1. Ve a **Apariencia > Temas**
2. Encuentra "Inmobiliaria Premium"
3. Haz clic en **Activar**

### Paso 3: Configurar el Menú
1. Ve a **Apariencia > Menús**
2. Crea un nuevo menú con los enlaces:
   - Inicio (#inicio)
   - Servicios (#servicios)
   - Propiedades (#propiedades)
   - Contacto (#contacto)
3. Asigna el menú a la ubicación "Menú Principal"

### Paso 4: Configurar la Página de Inicio
1. Ve a **Configuración > Lectura**
2. Selecciona **Una página estática**
3. Crea una nueva página llamada "Inicio" y asígnala como página de inicio
4. O deja "Tus últimas entradas" si prefieres usar `front-page.php` automáticamente

## ⚙️ Personalización

### Opciones del Customizer
Puedes personalizar algunos valores desde **Apariencia > Personalizar**:
- Colores del tema
- Título y subtítulo del hero
- Estadísticas del banner
- Información de contacto

### Editar Contenido Directamente
1. **Servicios**: Edita `front-page.php` (sección servicios)
2. **Propiedades**: Edita el array `$properties` en `front-page.php`
3. **Colores**: Modifica las variables CSS en `style.css` (líneas 8-18)

### Usar Custom Post Types (Avanzado)
Para gestionar propiedades desde el admin de WordPress:
1. Instala un plugin como **Custom Post Type UI**
2. Crea un CPT llamado "Propiedades"
3. Modifica `front-page.php` para usar `WP_Query` en lugar del array estático

## 🔧 Funcionalidades Incluidas

✅ **Soporte para imágenes destacadas**
✅ **Menús de navegación personalizables**
✅ **Formulario de contacto funcional** (envía emails)
✅ **Widgets sidebar** (opcional)
✅ **Responsive design**
✅ **SEO friendly** (títulos automáticos)

## 📧 Formulario de Contacto

El formulario está configurado para:
- Enviar emails usando `wp_mail()`
- Validar datos en el servidor
- Redirigir con mensaje de éxito

**Nota**: Para producción, considera usar un plugin como **Contact Form 7** o **WPForms** para mejor funcionalidad.

## 🎨 Diferencias Clave: HTML vs WordPress

| HTML Estático | WordPress |
|--------------|-----------|
| `index.html` | `front-page.php` + `header.php` + `footer.php` |
| Enlaces fijos | `home_url()` y `get_permalink()` |
| Contenido estático | `the_content()`, `the_title()`, etc. |
| CSS directo | `wp_enqueue_style()` |
| JS directo | `wp_enqueue_script()` |
| Sin backend | Base de datos MySQL |

## 🔐 Seguridad

- Todos los datos se sanitizan con funciones de WordPress
- Uso de `wp_nonce_field()` para formularios
- Validación de `ABSPATH` para prevenir acceso directo

## 📚 Recursos Adicionales

- [Documentación de WordPress Themes](https://developer.wordpress.org/themes/)
- [Codex de WordPress](https://codex.wordpress.org/)
- [Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/)

## 🆘 Solución de Problemas

**El tema no aparece en WordPress:**
- Verifica que `style.css` tenga el header correcto
- Asegúrate de que la carpeta tenga el nombre correcto

**El menú no funciona:**
- Verifica que hayas creado y asignado el menú en Apariencia > Menús

**El formulario no envía emails:**
- Configura SMTP en WordPress (usa un plugin como WP Mail SMTP)
- Verifica la configuración de email del servidor

---

**¡Tu tema está listo para usar!** 🎉

Si necesitas ayuda adicional, consulta la documentación de WordPress o personaliza los archivos según tus necesidades.


