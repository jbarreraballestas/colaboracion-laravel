# Colaboración Laravel

<p align="center">
<a href="https://github.com/jbarreraballestas/colaboracion-laravel/actions"><img src="https://github.com/jbarreraballestas/colaboracion-laravel/actions/workflows/laravel-ci-cd.yml/badge.svg" alt="Build Status"></a>
</p>

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

6. Instalar dependencias de node:

```bash
npm install
```

7. Construir las dependencias:

```bash
npm run build
```

8. Inicia el servidor local:

```bash
php artisan serve
```

## Contribución

1. Haz un fork de este repositorio y completa los pasos de instalación de tu propio repositorio fork.

2. Copia/Cambia la rama de desarrollo "develop" para tu funcionalidad, mejora, corrección:

```bash
git checkout -b nombre-de-tu-rama-ej-funcionalidad-genial develop
```

3. Realiza tus cambios y asegúrate de que los tests pasen. [Siempre incluye tests para cualquier nueva funcionalidad](https://laravel.com/docs/testing).

4. Realiza commits cortos, claros y concisos que expliquen tus cambios.

5. Cuando hayas terminado, haz un push de tu rama a tu repositorio fork:

```bash
git push origin nombre-de-tu-rama-ej-funcionalidad-genial
```

6. Abre un pull request a la rama develop de este repositorio.

## Convención de commits

- TAGS Etiquetas

| Etiqueta   | Descripción Corta                                       | Ejemplo de Mensaje de Commit                              |
|------------|---------------------------------------------------------|---------------------------------------------------------|
| `feat`     | Nueva característica o funcionalidad                    | `feat` Agregar autenticación de usuarios                |
| `fix`      | Corrección de errores o bugs                            | `fix` Resolver error de carga infinita en la página de inicio |
| `docs`     | Cambios en la documentación                              | `docs` Actualizar documentación del API                 |
| `style`    | Cambios relacionados con el formato o estilo del código | `style` Alinear código según estándares de estilo       |
| `refactor` | Refactorización del código, sin cambios funcionales     | `refactor` Reorganizar la estructura de directorios     |
| `test`     | Añadir o modificar pruebas                               | `test` Añadir casos de prueba para la clase de utilidades |
| `chore`    | Tareas generales, mantenimiento o actualizaciones       | `chore` Actualizar dependencias del proyecto            |
| `perf`     | Mejora de rendimiento                                   | `perf` Optimizar algoritmo de búsqueda                  |
| `revert`   | Revertir cambios anteriores                              | `revert` Revertir commit anterior que causó problemas  |
| `build`    | Cambios que afectan al sistema de construcción o dependencias | `build` Actualizar versión de la herramienta de compilación |
| `ci`       | Cambios en la configuración o scripts de integración continua | `ci` Configurar pruebas automáticas con GitHub Actions |

- ESCOPES Alcance

| Scope            | Descripción                                  | Ejemplo de Mensaje de Commit                                |
|------------------|----------------------------------------------|------------------------------------------------------------|
| `auth`           | Cambios relacionados con la autenticación    | `feat(auth)` agregar middleware para autenticación        |
| `routes`         | Modificaciones en las rutas                  | `fix(routes)` corregir error en la definición de rutas     |
| `views`          | Cambios en las vistas                         | `feat(views)` agregar nueva vista para el panel de control |
| `models`         | Cambios en los modelos                        | `refactor(models)` optimizar consultas en el modelo User  |
| `controllers`    | Modificaciones en controladores              | `fix(controllers)` manejar excepciones en el controlador   |
| `middlewares`    | Cambios en middleware                         | `feat(middlewares)` agregar middleware de registro de acceso|
| `migrations`     | Modificaciones en migraciones                | `chore(migrations)` actualizar tabla de usuarios           |
| `tests`          | Cambios en pruebas unitarias o de integración | `test(tests)` añadir casos de prueba para el servicio XYZ   |
| `config`         | Modificaciones en archivos de configuración   | `fix(config)` corregir configuración incorrecta en mail    |
| `dependencies`   | Cambios en dependencias (Composer, npm, etc.) | `chore(dependencies)` actualizar paquetes a la última versión |


## Guía de estilo

- Los commits deben ser claros y concisos, siguiendo el formato de convención de commits, puedes utilizar varios tags y/o varios scopes segun corresponda.

- Cada cambio significativo debe estar acompañado de [pruebas (test)](https://laravel.com/docs/testing) para asegurar su integridad y funcionalidad.

- Las ramas de características deben ser fusionadas en la rama develop a través de pull requests.

## Participación en Issues

¡Nos encantaría escuchar tus ideas y contribuciones! Puedes participar en el desarrollo de este proyecto a través de las siguientes vías:

- **Solicitudes de cambios (Pull Requests)**: Si deseas realizar una mejora, corregir un error o agregar una nueva característica, por favor, abre una solicitud de cambio. Asegúrate de seguir las pautas de contribución mencionadas en la sección Contribución de este documento.

- **Issues**: Si encuentras un problema o tienes una idea para una mejora, puedes crear un issue en este repositorio. Sin embargo, si se trata de un problema de seguridad, abstente de publicarlo aquí. En su lugar, envía un correo electrónico a [info@jhordybarrera.dev](mailto:info@jhordybarrera.dev).

Recuerda ser claro y detallado al describir el problema o la solicitud de cambio. Tu contribución es valiosa para mejorar este proyecto para todos los usuarios.

## Licencia

Este proyecto está bajo la [Licencia MIT](https://opensource.org/license/MIT). En resumen, esta licencia permite a cualquier persona utilizar, modificar y distribuir el software con pocos requisitos, incluyendo la inclusión del aviso de copyright y la licencia en todas las copias o partes sustanciales del software. No hay garantía de ningún tipo asociada con esta licencia. Para obtener más detalles, consulta la página de la licencia.
