# Proyecto de CRUD de trabajadores con Laravel y base de datos

Este proyecto es un ejemplo de cómo crear un CRUD de trabajadores utilizando el framework Laravel y una base de datos MySQL.

## Requisitos previos

Para poder utilizar este proyecto, necesitarás tener instalado lo siguiente en tu máquina:

- [Composer](https://getcomposer.org/)
- [Laravel](https://laravel.com/)
- [MySQL](https://www.mysql.com/)

## Instalación

1. Clona este repositorio en tu máquina local: https://github.com/Stivenfir/ProgramacionWebb.git

2. Accede al directorio del proyecto:
**cd ProgramacionWebb**

3. Instala las dependencias de Composer:
**composer install**

4. Crea una copia del archivo .env.example y renómbralo a .env:
**cp .env.example .env**

5. Genera la clave de la aplicación:
**php artisan key:generate**

6. Configura la conexión a la base de datos en el archivo .env con tus credenciales de MySQL:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=tu_usuario_de_mysql
DB_PASSWORD=tu_contraseña_de_mysql

7. Ejecuta las migraciones para crear las tablas de la base de datos:
**php artisan migrate**

8. Inicia el servidor web:
**php artisan serve**

9.Accede a la aplicación en tu navegador web en la dirección http://localhost:8000.


Por supuesto, aquí está el código que proporcione anteriormente para el archivo README de un proyecto CRUD de cursos con Laravel y base de datos:

markdown
Copy code
# Proyecto de CRUD de cursos con Laravel y base de datos

Este proyecto es un ejemplo de cómo crear un CRUD de cursos utilizando el framework Laravel y una base de datos MySQL.

## Requisitos previos

Para poder utilizar este proyecto, necesitarás tener instalado lo siguiente en tu máquina:

- [Composer](https://getcomposer.org/)
- [Laravel](https://laravel.com/)
- [MySQL](https://www.mysql.com/)

## Instalación

1. Clona este repositorio en tu máquina local:

git clone https://github.com/tuusuario/tuproyecto.git

css
Copy code

2. Accede al directorio del proyecto:

cd tuproyecto

markdown
Copy code

3. Instala las dependencias de Composer:

composer install

css
Copy code

4. Crea una copia del archivo .env.example y renómbralo a .env:

cp .env.example .env

markdown
Copy code

5. Genera la clave de la aplicación:

php artisan key:generate

bash
Copy code

6. Configura la conexión a la base de datos en el archivo .env con tus credenciales de MySQL:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=tu_usuario_de_mysql
DB_PASSWORD=tu_contraseña_de_mysql

csharp
Copy code

7. Ejecuta las migraciones para crear las tablas de la base de datos:

php artisan migrate

csharp
Copy code

8. Ejecuta los seeders para poblar la base de datos con datos de prueba:

php artisan db:seed

markdown
Copy code

9. Inicia el servidor web:

php artisan serve

markdown
Copy code

10. Accede a la aplicación en tu navegador web en la dirección `http://localhost:8000`.

## Uso

La aplicación es un CRUD de cursos, donde puedes crear, leer, actualizar y eliminar cursos. Puedes acceder a las siguientes rutas en tu navegador web:

- `/cursos`: Muestra una lista de todos los cursos disponibles.
- `/cursos/nuevo`: Muestra el formulario para crear un nuevo curso.
- `/cursos/{id}`: Muestra la información detallada de un curso específico.
- `/cursos/{id}/editar`: Muestra el formulario para editar un curso existente.

## Contribución

Si deseas contribuir a este proyecto, puedes enviar un pull request en GitHub. Asegúrate de seguir las siguientes directrices:

- Crea una rama nueva para tu contribución.
- Agrega pruebas unitarias y de integración para tu código.
- Asegúrate de que todas las pruebas pasen antes de enviar tu pull request.

## Licencia

Este proyecto está bajo la Licencia MIT. Puedes consultar el archivo LICENSE para más detalles.



