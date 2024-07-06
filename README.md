

## Setup
```sh
git clone https://github.com/mfhassan22/st-task.git

cp .env.example .env

composer install

php artisan migrate

php artisan db:seed

npm install

npm run build

php artisan serve

```

## Frameworks / Tools

- Laravel
- Blade
- Tailwind

## Tasks

- [x] Given two models, writer and books, create a migration for each model and set up a one-to-many relationship. Write a query to retrieve all books for a specific writer
- [x] Create a migration for a new model, articles(essays), with fields for name, wordcount, and status. Also, create a seeder to populate the database with sample articles data.
- [x] Write a custom middleware that logs the IP address and timestamp for each incoming request. Apply this middleware to a specific route in your Laravel application.
- [x] Create a route that uses route model binding to retrieve a book model by its ID. Display the book details on the route.
- [x] Implement user authentication using Laravel's built-in authentication system. Create login and registration routes and views.