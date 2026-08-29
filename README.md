# PsicoMétrica Consultores S.A.S

Sitio web corporativo de PsicoMétrica Consultores, especialistas en evaluación psicométrica y desarrollo organizacional en Colombia.

## 🛠️ Tecnologías

- **HTML + CSS + JavaScript puro** — sin frameworks ni proceso de build
- **CSS compartido** en `assets/styles.css` (base común de todas las páginas) + estilos específicos por página en cada HTML
- **JavaScript compartido** en `assets/main.js` (menú móvil)
- **Tipografía**: Lato (Google Fonts) · **Íconos**: Font Awesome 6.4 (CDN)

## 📁 Estructura del Proyecto

```
WEB/
├── index.html                  # Página principal
├── nosotros.html               # Nosotros
├── soluciones.html             # Soluciones
├── clientes.html               # Clientes
├── contacto.html               # Contacto (WhatsApp, email, teléfono)
├── calculadora-ejemplo-vm.html # Demo: calculadora de costos (noindex)
├── 404.html                    # Página de error personalizada
├── assets/
│   ├── styles.css              # Estilos compartidos del sitio
│   ├── main.js                 # JS compartido (menú móvil)
│   └── *.png / *.webp          # Logo e imágenes
├── .htaccess                   # URLs limpias, caché, gzip, 404
├── Dockerfile                  # Imagen PHP 8.2 + Apache para Render
├── robots.txt
└── sitemap.xml
```

## 🎨 Diseño

La paleta y tipografía se definen como variables CSS en `assets/styles.css`:

- **Azul marino** `#1E3A8A` — color principal (headers, títulos, footer)
- **Verde vibrante** `#10B981` — color de acento (CTA, hover, íconos)
- Fondos claros `#F8FAFC` / `#F1F5F9` para secciones alternas
- Fuente **Lato**

Sitio responsive con breakpoints en 768px y 480px. El menú móvil se despliega
con el botón hamburguesa (gestionado por `assets/main.js`).

## 🚀 Despliegue (Render)

El sitio se sirve desde un contenedor **PHP 8.2 + Apache** definido en el `Dockerfile`:

1. Haz commit y push a `main`:
   ```bash
   git add .
   git commit -m "Descripción del cambio"
   git push origin main
   ```
2. Render reconstruye y despliega automáticamente (si tienes Auto-Deploy activado; si no, usa *Manual Deploy → Deploy latest commit*).

El `.htaccess` proporciona:

- **URLs limpias**: `/nosotros`, `/soluciones`, `/clientes`, `/contacto`, `/calculadora-ejemplo-vm`
- **Página 404 personalizada** (`404.html`)
- **Compresión GZIP** y **cabeceras de caché** para CSS, JS, imágenes y fuentes

## 📞 Contacto del sitio

- Email: info@psicometrica.co
- Teléfono / WhatsApp: +57 310-2594866
- Bogotá, Colombia

## 📄 Licencia

© 2025 PsicoMétrica Consultores S.A.S. Todos los derechos reservados.
