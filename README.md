# Laravel Practice Basic

This is a Laravel-based web application built as part of a crash course to demonstrate the core features of the Laravel framework. It includes authentication, authorization, and CRUD functionality for managing notes.

## Features

- **Authentication**: User authentication using Laravel Breeze.
- **Authorization**: Custom error pages, such as a `403` page for unauthorized access.
- **CRUD Operations**: Manage notes with create, read, update, and delete functionality.
- **Frontend**: Styled using Tailwind CSS.
- **Error Handling**: Custom error pages for better user experience.
- **Testing**: Includes unit and feature tests using PestPHP.

## Project Structure

The project follows the standard Laravel directory structure:

- `app/`: Contains application logic, including controllers, models, and middleware.
- `resources/views/`: Blade templates for the frontend, including custom error pages like `403.blade.php`.
- `routes/`: Application routes defined in `web.php` and `api.php`.
- `config/`: Configuration files for the application.
- `database/`: Migrations and seeders for database setup.
- `tests/`: Unit and feature tests using PestPHP.

## Installation

Follow these steps to set up the project locally:

1. Clone the repository:
   ```sh
   git clone <repo-url>
   cd laravel-practice
   ```

2. Install dependencies:
   ```sh
   composer install
   npm install
   ```

3. Set up the environment:
   ```sh
   cp .env.example .env
   php artisan key:generate --ansi
   ```

4. Configure the database:

   Update the `.env` file with your database credentials, then run:
   ```sh
   php artisan migrate --seed
   ```

5. Start the development server:
   ```sh
   php artisan serve
   npm run dev
   ```

## Usage

Access the application at `http://localhost:8000`.  
Log in or register to manage notes.  
Navigate to the notes section to create, edit, or delete notes.

## Testing

Run the test suite using PestPHP:
   ```sh
   php artisan test
   ```

## Error Pages

Custom error pages are included, such as the `403.blade.php` file for unauthorized access. These pages are located in the `resources/views/errors/` directory.

## Development Tools

- **Laravel Breeze**: Provides authentication scaffolding.
- **Tailwind CSS**: For styling the frontend.
- **PestPHP**: For writing expressive and easy-to-read tests.



## Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Laravel Breeze](https://laravel.com/docs/starter-kits#laravel-breeze)
- [PestPHP Documentation](https://pestphp.com/docs)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
