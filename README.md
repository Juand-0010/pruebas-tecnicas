Instrucciones para Ejecutar
Requisitos Previos
Antes de empezar, asegúrate de que tu sistema tiene lo siguiente:

PHP 8.0 o superior: Verifica que PHP está instalado ejecutando php -v en tu terminal.
Composer: Es una herramienta para gestionar dependencias en proyectos PHP. Si no lo tienes instalado, descárgalo desde su página oficial.
MySQL: Asegúrate de tener un servidor de base de datos MySQL activo.
Clonar el Proyecto
Lo primero que debes hacer es clonar el repositorio donde está el proyecto. Para hacerlo, ejecuta el comando "git clone https://github.com/Juand-0010/pruebas-tecnicas.git".
Luego, accede al directorio del proyecto utilizando el comando "cd" y el nombre del proyecto.

Instalar Dependencias
Una vez dentro del directorio del proyecto, instala las dependencias ejecutando el comando composer install. Esto descargará todas las librerías necesarias para que el proyecto funcione correctamente.

Configurar Variables de Entorno
Copia el archivo de configuración predeterminado llamado .env.example y renómbralo a .env. Puedes hacerlo fácilmente con el comando cp .env.example .env.
Luego, abre el archivo .env con tu editor de texto favorito y configura los datos de conexión a la base de datos. Asegúrate de modificar los siguientes campos:

DB_CONNECTION: Configúralo como "mysql".
DB_HOST: Define la dirección del servidor de tu base de datos (por defecto es "127.0.0.1").
DB_PORT: Usa el puerto correspondiente (generalmente "3306").
DB_DATABASE: Especifica el nombre de tu base de datos.
DB_USERNAME: Ingresa el nombre de usuario de tu base de datos.
DB_PASSWORD: Proporciona la contraseña de tu usuario de la base de datos.
Generar la Clave de Aplicación
Laravel utiliza una clave de aplicación única para encriptar información. Genera esta clave ejecutando el comando php artisan key:generate.

Ejecutar Migraciones
Ahora debes crear las tablas en tu base de datos. Para esto, ejecuta el comando php artisan migrate. Laravel tomará las migraciones definidas en el proyecto y las aplicará a tu base de datos.

Iniciar el Servidor
Con todo listo, es hora de iniciar el servidor de desarrollo de Laravel. Hazlo ejecutando el comando php artisan serve. Esto pondrá el proyecto en marcha y te dará una URL, como http://127.0.0.1:8000. Copia esa URL y pégala en tu navegador para acceder al proyecto.

Ejecutar Pruebas Unitarias
Si quieres verificar que todo funciona correctamente, puedes ejecutar las pruebas unitarias incluidas en el proyecto utilizando el comando php artisan test. Esto te dará información sobre el estado del proyecto y confirmará que todo está en orden.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
