# Landing Page - Inmobiliaria con Tours Virtuales 360°

Landing page moderna con integración de recorridos virtuales 360° para propiedades inmobiliarias. Perfecto para mostrar propiedades en venta, renta y listados de Airbnb.

## 🎥 Características Principales

- **Tours Virtuales 360°**: Visualización inmersiva de propiedades usando Pannellum
- **Filtros Inteligentes**: Filtra por Compra, Renta o Airbnb
- **Modal Interactivo**: Modal fullscreen para ver los tours 360°
- **Diseño Responsive**: Funciona perfectamente en móvil, tablet y desktop
- **Navegación Suave**: Scroll suave entre secciones
- **Formulario de Contacto**: Para solicitar tours 360° o información

## 📁 Archivos del Proyecto

```
.
├── index.html      # Estructura HTML con tours 360
├── styles.css      # Estilos CSS (incluye estilos para modal y filtros)
├── script.js       # JavaScript (filtros, modal, Pannellum)
└── README-360.md   # Este archivo
```

## 🚀 Cómo Usar

### 1. Abrir el Proyecto
Simplemente abre `index.html` en tu navegador web.

### 2. Ver Tours 360°
- Haz clic en cualquier botón "Ver Tour 360°" en las propiedades
- El modal se abrirá con el visualizador 360°
- Arrastra para rotar, usa la rueda del mouse para zoom
- Cierra con la X o presionando ESC

### 3. Filtrar Propiedades
- Usa los botones de filtro: Todas, Compra, Renta, Airbnb
- Las propiedades se filtrarán automáticamente

## 🎨 Personalización

### Reemplazar Imágenes 360° con tus Propias

1. **Prepara tus imágenes 360°**:
   - Formato: Imágenes panorámicas equirectangulares (formato 2:1, ej: 6000x3000px)
   - Puedes crearlas con cámaras 360° o servicios como Matterport, Kuula, etc.

2. **Edita `script.js`**:
   Encuentra el objeto `tours360` y reemplaza las URLs:

```javascript
const tours360 = {
    tour1: {
        title: 'Casa Moderna en Zona Premium',
        // Reemplaza esta URL con la de tu imagen 360
        image: 'https://tudominio.com/tours/casa-moderna-360.jpg'
    },
    tour2: {
        title: 'Apartamento Elegante Centro',
        image: 'https://tudominio.com/tours/apartamento-360.jpg'
    },
    // ... más tours
};
```

3. **Opciones de Almacenamiento**:
   - **Servidor propio**: Sube las imágenes a tu servidor
   - **CDN**: Usa servicios como Cloudinary, AWS S3, etc.
   - **Servicios 360°**: Integra con Matterport, Kuula, Roundme, etc.

### Integrar con Servicios de Tours 360°

#### Opción 1: Matterport
Si usas Matterport, puedes integrar sus iframes:

```javascript
// En lugar de Pannellum, usar iframe de Matterport
function openTour360(tourId, title) {
    const matterportUrl = 'https://my.matterport.com/show/?m=TU_MODEL_ID';
    // Mostrar iframe en el modal
}
```

#### Opción 2: Kuula
```javascript
const tours360 = {
    tour1: {
        title: 'Casa Moderna',
        // URL de embed de Kuula
        embedUrl: 'https://www.kuula.co/share/XXXXX'
    }
};
```

### Agregar Más Propiedades

1. **En `index.html`**, agrega una nueva tarjeta de propiedad en la sección `properties-grid`:

```html
<div class="property-card" data-type="compra">
    <div class="property-image">
        <img src="imagen-propiedad.jpg" alt="Nueva Propiedad">
        <span class="property-badge">Compra</span>
        <div class="property-overlay">
            <button class="btn-tour-360" data-tour="tour7" data-title="Nueva Propiedad">
                🎥 Ver Tour 360°
            </button>
        </div>
    </div>
    <!-- resto del contenido -->
</div>
```

2. **En `script.js`**, agrega el tour correspondiente:

```javascript
const tours360 = {
    // ... tours existentes
    tour7: {
        title: 'Nueva Propiedad',
        image: 'url-de-tu-imagen-360.jpg'
    }
};
```

### Personalizar Colores

Edita las variables CSS en `styles.css`:

```css
:root {
    --primary-color: #2563eb;    /* Color principal */
    --secondary-color: #1e40af;  /* Color secundario */
    --accent-color: #f59e0b;     /* Color de acento */
}
```

## 🎥 Crear Imágenes 360°

### Opciones para Crear Tours 360°:

1. **Cámaras 360°**:
   - Insta360, GoPro MAX, Ricoh Theta
   - Capturan automáticamente imágenes equirectangulares

2. **Servicios Profesionales**:
   - **Matterport**: Tours 3D profesionales
   - **Kuula**: Plataforma para crear y compartir tours
   - **Roundme**: Crear tours virtuales interactivos
   - **3DVista**: Software para tours virtuales

3. **Software de Edición**:
   - PTGui (para unir múltiples fotos)
   - Adobe Photoshop (con plugins)
   - Pano2VR

## 📱 Compatibilidad

- ✅ Chrome, Firefox, Safari, Edge
- ✅ iOS Safari (soporte táctil)
- ✅ Android Chrome
- ✅ Tablets y móviles

## 🔧 Configuración Avanzada de Pannellum

Puedes personalizar el visualizador 360° editando la configuración en `script.js`:

```javascript
viewer = pannellum.viewer('panorama', {
    "type": "equirectangular",
    "panorama": tour.image,
    "autoLoad": true,
    "autoRotate": 2,           // Rotación automática (grados/segundo)
    "compass": true,            // Mostrar brújula
    "showControls": true,       // Mostrar controles
    "keyboardZoom": true,       // Zoom con teclado
    "mouseZoom": true,          // Zoom con mouse
    "hfov": 100,                // Campo de visión horizontal inicial
    "minHfov": 50,              // Zoom mínimo
    "maxHfov": 120,             // Zoom máximo
    "pitch": 0,                 // Inclinación inicial
    "yaw": 0                    // Rotación inicial
});
```

## 📝 Notas Importantes

1. **Tamaño de Imágenes**: Las imágenes 360° pueden ser grandes (5-20MB). Optimiza para web.
2. **Formato**: Usa formatos optimizados como JPEG o WebP.
3. **CORS**: Si las imágenes están en otro dominio, asegúrate de configurar CORS correctamente.
4. **Performance**: Considera lazy loading para tours que no se han abierto.

## 🌐 Ejemplo de URLs de Imágenes 360°

Puedes usar estas URLs de ejemplo para probar (de Pannellum):
- `https://pannellum.org/images/alma.jpg`
- `https://pannellum.org/images/cerro-toco-0.jpg`

## 🆘 Solución de Problemas

**El tour 360° no se muestra:**
- Verifica que la URL de la imagen sea correcta
- Asegúrate de que la imagen sea formato equirectangular (2:1)
- Revisa la consola del navegador para errores

**El modal no se cierra:**
- Presiona ESC o haz clic fuera del contenido
- Verifica que el JavaScript esté cargado correctamente

**Los filtros no funcionan:**
- Asegúrate de que los `data-type` en las tarjetas coincidan con los filtros
- Verifica la consola para errores de JavaScript

## 📚 Recursos Adicionales

- [Documentación de Pannellum](https://pannellum.org/documentation/)
- [Guía de Formatos 360°](https://pannellum.org/documentation/overview/panoramic-images/)
- [Ejemplos de Pannellum](https://pannellum.org/examples/)

---

**¡Disfruta explorando propiedades en 360°!** 🎥✨

