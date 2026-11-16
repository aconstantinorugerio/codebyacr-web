# CodeByACR — Portafolio web

Portafolio profesional de Agustín Constantino Rugerio, desarrollado con Laravel y Bootstrap. Presenta experiencia, servicios y proyectos, e incluye un formulario de contacto que registra las solicitudes y envía correos al visitante y al administrador.

## Tecnologías

- PHP 8.2 o superior
- Laravel 12
- Bootstrap 5.3, Bootstrap Icons y Font Awesome
- MySQL para el entorno local con XAMPP

## Instalación local

1. Instala las dependencias de PHP:

   ```bash
   composer install
   ```

2. Crea el archivo de entorno a partir de la plantilla:

   ```powershell
   Copy-Item .env.example .env
   php artisan key:generate
   ```

3. Configura en `.env` la conexión a la base de datos que usarás. Para MySQL local, crea primero la base de datos y define `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME` y `DB_PASSWORD`.

4. Ejecuta las migraciones y arranca el servidor local:

   ```bash
   php artisan migrate
   php artisan serve
   ```

5. Para entregar correos desde el formulario, configura el transporte `MAIL_*` de tu proveedor SMTP y el destinatario administrativo en `CONTACT_ADMIN_EMAIL`. El valor predeterminado del destinatario es `contacto@codebyacr.com`.

## Estructura principal

```text
app/Http/Controllers/       Controladores HTTP
app/Http/Requests/          Validación de solicitudes
app/Mail/                   Correos del formulario
app/Models/                 Modelos Eloquent
config/contact.php          Configuración del destinatario de contacto
resources/views/layouts/    Layouts Blade
resources/views/pages/      Páginas
resources/views/sections/   Secciones de la página principal
resources/views/components/ Componentes reutilizables, incluidas las fichas de proyecto
resources/views/partials/   Navegación, pie y modal de contacto
resources/views/emails/     Plantillas de correo
resources/css/              Estilos organizados por sección y componente
resources/js/modules/       Funcionalidad JavaScript por módulo
public/asset/css/style.css  Entrada de estilos públicos por sección y componente
public/asset/js/main.js     Carrusel público
public/asset/js/modules/    Scripts públicos del formulario
public/asset/images/        Imágenes y recursos públicos
routes/web.php              Rutas web
```

Las fichas del carrusel se generan con `resources/views/components/project-card.blade.php`. Sus imágenes se conservan en `public/asset/images/proyectos/`.

El sitio utiliza Bootstrap 5.3 y entrega sus estilos y scripts directamente desde `public/asset/`; para esta versión no requiere compilar assets. Las hojas organizadas en `resources/css/` y `resources/js/` tienen una copia pública sincronizada para su entrega web. Al actualizar un módulo, conserva ambas copias alineadas.

## Seguridad y configuración

- Mantén las credenciales y claves reales únicamente en `.env`; no las subas al repositorio.
- En producción, define `APP_ENV=production`, `APP_DEBUG=false` y `APP_URL` con el dominio real.
- Apunta el document root del sitio a la carpeta `public/` de Laravel.
- Usa credenciales de base de datos y SMTP separadas para producción.
