# Colaboración Laravel

Este repositorio tiene como fin explicar e implementar la forma de trabajar de manera colaborativa, se realizará con fines educativos con el unico proposito de compartir conocimiento y trabajar en equipo

## Prerrequisitos para trabajar en Laravel

Antes de comenzar a trabajar en este proyecto, asegúrate de tener instalados los siguientes requisitos previos:

1. **PHP**: Laravel requiere PHP en tu sistema. Puedes descargar PHP desde [php.net](https://www.php.net/downloads).
   
2. **Composer**: Laravel utiliza Composer para administrar sus dependencias. Puedes instalar Composer siguiendo las instrucciones en [getcomposer.org](https://getcomposer.org/download/).

3. **Servidor Web (Opcional)**: Para ejecutar tu aplicación Laravel localmente, necesitarás un servidor web. Puedes usar Apache, Nginx u otro servidor web de tu elección.

4. **Base de datos**: Laravel admite varios sistemas de gestión de bases de datos. Asegúrate de tener instalado y configurado MySQL, PostgreSQL, SQLite o cualquier otro sistema de gestión de bases de datos que desees utilizar.

5. **Node.js y NPM**: Necesario para compilar tus activos front-end, necesitarás tener Node.js y NPM instalados. Puedes descargar Node.js desde [nodejs.org](https://nodejs.org/).

6. **Git**: Necesitas tener Git instalado para manejar el control de versiones de tu proyecto. Puedes descargar Git desde [git-scm.com](https://git-scm.com/downloads).

Una vez que hayas instalado todos los requisitos previos, puedes proceder con la instalación y configuración de Laravel en tu entorno local siguiendo las instrucciones en la sección de Instalación.


## Instalación

1. Clona este repositorio en tu maquina local usando el siguiente comando:

```bash
git clone https://github.com/jbarreraballestas/colaboracion-laravel.git
```

2. Instala las dependencias del proyecto usando Composer:

```bash
composer install
```

3. Copia el archivo .env.example y renómbralo a .env. Luego, configura las variables de entorno necesarias.

```bash
cp .env.example .env
```

4. Genera una nueva clave de aplicación:

```bash
php artisan key:generate
```

5. Ejecuta las migraciones, necesitas haber configurado tu gestor de bases de datos en las variables de entorno en el archivo .env, por ejemplo DB_CONNECTION=sqlite:

```bash
php artisan migrate
```

6. Inicia el servidor local:

```bash
php artisan serve
```

## Contribución

1. Haz un fork de este repositorio.

2. Copia la rama de desarrollo "develop" para tu funcionalidad, mejora, corrección:

```bash
git checkout -b nombre-de-tu-rama-ej-funcionalidad-genial develop
```

3. Realiza tus cambios y asegúrate de que los tests pasen. Siempre incluye tests para cualquier nueva funcionalidad.

4. Realiza commits cortos, claros y concisos que expliquen tus cambios.

5. Cuando hayas terminado, haz un push de tu rama a tu repositorio fork:

```bash
git push origin nombre-de-tu-rama-ej-funcionalidad-genial
```

6. Abre un pull request a la rama develop de este repositorio.

## Guía de Estilo

- Los commits deben ser claros y concisos, siguiendo el formato: "Breve descripción del cambio por ejemplo: Nuevo contribuidor github-username.", "Nueva funcionalidad genial x.".

- Cada cambio significativo debe estar acompañado de pruebas (Test) para asegurar su integridad y funcionalidad.

- Las ramas de características deben ser fusionadas en la rama develop a través de pull requests.

## Participación en Issues

¡Nos encantaría escuchar tus ideas y contribuciones! Puedes participar en el desarrollo de este proyecto a través de las siguientes vías:

- **Solicitudes de cambios (Pull Requests)**: Si deseas realizar una mejora, corregir un error o agregar una nueva característica, por favor, abre una solicitud de cambio. Asegúrate de seguir las pautas de contribución mencionadas en la sección Contribución de este documento.

- **Issues**: Si encuentras un problema o tienes una idea para una mejora, puedes crear un issue en este repositorio. Sin embargo, si se trata de un problema de seguridad, abstente de publicarlo aquí. En su lugar, envía un correo electrónico a [info@jhordybarrera.dev](mailto:info@jhordybarrera.dev).

Recuerda ser claro y detallado al describir el problema o la solicitud de cambio. Tu contribución es valiosa para mejorar este proyecto para todos los usuarios.

## Licencia

Este proyecto está bajo la [Licencia MIT](https://opensource.org/license/MIT). En resumen, esta licencia permite a cualquier persona utilizar, modificar y distribuir el software con pocos requisitos, incluyendo la inclusión del aviso de copyright y la licencia en todas las copias o partes sustanciales del software. No hay garantía de ningún tipo asociada con esta licencia. Para obtener más detalles, consulta la página de la licencia.
