# CRUD Application with Laravel 11

A simple CRUD (Create, Read, Update, Delete) application built with Laravel 11. 
This project serves as a demonstration of basic CRUD operations on a database using Laravel's Eloquent ORM and resourceful routes.

## Features

- Create, Read, Update, and Delete records
- Uses Laravel’s Eloquent ORM for database interactions
- RESTful API using `Route::resource`
- Basic form validation
- Responsive UI with Bootstrap

## Requirements

- **PHP** 8.1 or higher
- **Composer** 2.x
- **Node.js** 16.x and **NPM**
- **MySQL** or other supported database

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/amarpaviall/CRUD_LARAVEL11.git
    cd CRUD_LARAVEL11
    ```

2. Install dependencies via Composer:

    ```bash
    composer install
    ```

3. Install frontend dependencies via NPM:

    ```bash
    npm install
    ```

## Environment Setup

1. Copy the `.env.example` file to `.env`:

    ```bash
    cp .env.example .env
    ```

2. Generate an application key:

    ```bash
    php artisan key:generate
    ```

3. Update your `.env` file with the database credentials:

    ```plaintext
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

4. Migrate the database tables:

    ```bash
    php artisan migrate
    ```

## Running the Application

1. Compile assets:

    ```bash
    npm run dev
    ```

2. Run the local development server:

    ```bash
    php artisan serve
    ```

3. Visit [http://localhost:8000](http://localhost:8000) in your browser.

## Project Structure

- `app/Http/Controllers` - Contains the controllers handling the CRUD logic.
- `resources/views` - Contains Blade templates for the UI.
- `routes/web.php` - Defines the application routes, including CRUD routes.

## Usage

- **Creating a Record**: Navigate to `/create` and fill out the form.
- **Reading Records**: View all records on the homepage or individual records by their ID.
- **Updating a Record**: Edit records by navigating to `/edit/{id}`.
- **Deleting a Record**: Delete records using the delete button on each record.

### Routes Example

This project uses `Route::resource` for simplified routing. Here is the primary resource route:

```php
Route::resource('items', ItemController::class);
