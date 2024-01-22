# Vue Inertia Laravel Project

Welcome to the Vue Inertia Laravel Project! This project is built using Vue.js, Inertia.js, and Laravel.

## Getting Started

### Prerequisites

Make sure you have the following installed on your machine:

-   [Node.js](https://nodejs.org/)
-   [Composer](https://getcomposer.org/)
-   [PHP](https://www.php.net/)

### Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/soungoolwin/national_engineering_group
    ```

2. Navigate to the project directory:

    ```bash
    cd national_engineering_group
    ```

3. Install PHP dependencies:

    ```bash
    composer install
    ```

4. Install Node.js dependencies:

    ```bash
    npm install
    ```

5. Copy the `.env.example` file to `.env` and configure your database settings.

6. Generate application key:

    ```bash
    php artisan key:generate
    ```

7. Migrate the database:

    ```bash
    php artisan migrate
    ```

8. Start the development server:

    ```bash
    php artisan serve
    ```

9. Visit `http://localhost:8000` in your browser to see the application.

## Development

### Frontend

To work on the frontend, you can use the following commands:

-   Compile assets for development:

    ```bash
    npm run dev
    ```

-   Compile and minify for production:

    ```bash
    npm run prod
    ```

### Backend

For Laravel development, use the standard Artisan commands. For example:

-   Create a new controller:

    ```bash
    php artisan make:controller MyController
    ```

-   Create a new model:

    ```bash
    php artisan make:model MyModel
    ```

## Additional Information

For more details on how Vue.js, Inertia.js, and Laravel work together, refer to their respective documentation:

-   [Vue.js](https://vuejs.org/)
-   [Inertia.js](https://inertiajs.com/)
-   [Laravel](https://laravel.com/)
