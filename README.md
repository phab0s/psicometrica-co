# PsicoMétrica Consultores S.A.S

Sitio web moderno y profesional para PsicoMétrica Consultores, especialistas en evaluación psicométrica y desarrollo organizacional.

## 🎨 Características del Diseño

### Paleta de Colores
- **Azul Marino Oscuro** `#1a365d` - Color principal del logo
- **Verde Vibrante** `#38a169` - Color de acento del logo
- **Negro Profundo** `#000000` - Para fondos y elementos de contraste
- **Blanco Puro** `#ffffff` - Para textos sobre fondos oscuros
- **Gris Claro** `#f7fafc` - Para fondos alternos

### Tipografías
- **Inter** - Para títulos y encabezados
- **Source Sans Pro** - Para cuerpo de texto

## 📁 Estructura del Proyecto

```
WEB/
├── index.html          # Página principal
├── nosotros.html       # Página Nosotros
├── soluciones.html     # Página Soluciones
├── clientes.html       # Página Clientes
├── contacto.html       # Página Contacto
├── favicon.ico         # Favicon
├── apple-touch-icon.png
├── favicon-32x32.png
├── favicon-16x16.png
└── README.md          # Este archivo
```

## 🚀 Despliegue en Netlify

### Opción 1: Despliegue Directo desde GitHub

1. **Sube el código a GitHub:**
   ```bash
   git init
   git add .
   git commit -m "Initial commit"
   git branch -M main
   git remote add origin https://github.com/phab0s/psicometrica-co.git
   git push -u origin main
   ```

2. **Conecta con Netlify:**
   - Ve a [netlify.com](https://netlify.com)
   - Crea una cuenta o inicia sesión
   - Haz clic en "New site from Git"
   - Selecciona tu repositorio de GitHub
   - Configura las opciones de build (no necesarias para sitios estáticos)
   - Haz clic en "Deploy site"

### Opción 2: Despliegue Manual

1. **Prepara los archivos:**
   - Asegúrate de que todos los archivos HTML estén en la raíz del proyecto
   - Verifica que las rutas de los favicons sean correctas

2. **Sube a Netlify:**
   - Ve a [netlify.com](https://netlify.com)
   - Arrastra y suelta la carpeta del proyecto en el área de deploy
   - Netlify automáticamente detectará que es un sitio estático

### Opción 3: Usando Netlify CLI

1. **Instala Netlify CLI:**
   ```bash
   npm install -g netlify-cli
   ```

2. **Inicia sesión:**
   ```bash
   netlify login
   ```

3. **Despliega:**
   ```bash
   netlify deploy
   ```

4. **Publica el sitio:**
   ```bash
   netlify deploy --prod
   ```

## ⚙️ Configuración Adicional

### Dominio Personalizado
1. Ve a tu dashboard de Netlify
2. Selecciona tu sitio
3. Ve a "Domain settings"
4. Agrega tu dominio personalizado
5. Configura los registros DNS según las instrucciones

### Formulario de Contacto
El formulario de contacto actualmente muestra un mensaje de confirmación. Para que funcione completamente:

1. **Usando Netlify Forms:**
   - Netlify automáticamente detectará el formulario
   - Los envíos aparecerán en tu dashboard de Netlify

2. **Usando un servicio externo:**
   - Modifica el JavaScript en `contacto.html`
   - Integra con servicios como Formspree, EmailJS, o tu propio backend

### Analytics
Para agregar Google Analytics:

1. Ve a tu dashboard de Netlify
2. Ve a "Site settings" > "Code injection"
3. Agrega el código de Google Analytics en el `<head>`

## 📱 Características Responsive

El sitio está completamente optimizado para:
- **Desktop** (1200px+)
- **Tablet** (768px - 1199px)
- **Mobile** (320px - 767px)

## 🔧 Personalización

### Cambiar Colores
Los colores están definidos en variables CSS en cada archivo HTML:

```css
:root {
    --azul-marino: #1a365d;
    --verde-vibrante: #38a169;
    /* ... otros colores */
}
```

### Cambiar Contenido
- Edita directamente los archivos HTML
- Actualiza la información de contacto
- Modifica los testimonios y casos de éxito
- Personaliza los servicios ofrecidos

### Agregar Páginas
1. Crea un nuevo archivo HTML
2. Copia la estructura de header y footer de las páginas existentes
3. Agrega el enlace en el menú de navegación
4. Despliega los cambios

## 📞 Soporte

Para soporte técnico o consultas sobre el sitio web:
- Email: info@psicometrica.co
- Teléfono: +57 (1) 123-4567

## 📄 Licencia

© 2024 PsicoMétrica Consultores S.A.S. Todos los derechos reservados.

---

**Nota:** Este sitio web está optimizado para Netlify y utiliza tecnologías modernas como CSS Grid, Flexbox y JavaScript ES6+ para una experiencia de usuario excepcional. 