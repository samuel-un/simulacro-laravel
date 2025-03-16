# Simulacro 2T (10 puntos)

Este simulacro consiste en la implementación de diversas funcionalidades en Laravel. A continuación, se detallan las tareas a realizar.

## Requisitos del Simulacro

### 1. Rutas y Controladores (2 puntos)

Crea una ruta en Laravel que llame a un controlador llamado `UserController` y ejecute el método `index` cuando el usuario visite `/usuarios`.

### 2. Migrations y Modelos (2 puntos)

Escribe una migration para crear una tabla `posts` con los siguientes campos:

-   `id` (clave primaria, autoincremental)
-   `title` (cadena de texto, obligatorio)
-   `content` (texto largo, opcional)
-   `created_at` y `updated_at` (timestamps de Laravel)

### 3. Eloquent ORM (2 puntos)

Escribe el código para obtener todos los registros de la tabla `posts` usando Eloquent y devolverlos en un controlador.

### 4. Blade Templates (2 puntos)

Escribe un fragmento de código Blade que recorra un array de usuarios y muestre sus nombres en una lista `<ul>`.

### 5. Formularios y Validación (2 puntos)

Escribe un formulario en Blade para enviar un nuevo usuario con los campos `nombre` y `email`. Asegúrate de que el formulario:

-   Utilice el método `POST`
-   Incluya protección CSRF
-   Se valide tanto en JavaScript como en PHP

---

## Guía de Uso del Repositorio

### Instalación del Proyecto

1. **Instala las dependencias**

    ```sh
    composer install
    ```

2. **Configura el entorno**

    ```sh
    cp .env.example .env
    ```

3. **Edita el archivo `.env` con los datos de conexión a la base de datos**

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=simulacro-laravel
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4. **Genera la clave de aplicación**

    ```sh
    php artisan key:generate
    ```

5. **Crea la base de datos en MySQL y ejecuta las migraciones**

    ```sh
    php artisan migrate
    ```

6. **Levanta el servidor local**
    ```sh
    php artisan serve
    ```

Ahora, puedes acceder a la aplicación en `http://127.0.0.1:8000`.

---

Este README te ayudará a completar el simulacro de forma estructurada y clara. ¡Éxito en la implementación! 🚀
