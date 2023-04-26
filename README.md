# LaraMovie
LaraMovie is a Laravel-based webapplication for a fictive cinema.

### Prerequisites
 - PHP 8.2.0
 - Composer
 - Node
 - Apache / NGINGX
 - SQL server

### Database setup & migrations
 - Setup your own .env file based on the type of SQL you are using (you can see an example in the .env.example file)
 - Run the database migration in order to create neccesary tables and columns: `php artisan migrate`.
 - Run the following commands to install composer & npm packages:
  ```
    $ composer install
    $ npm install
    $ npm run dev / build
    $ php artisan serve
  ```

### Database seeding
 - In order to get a default admin user and some dummy movies, run the following command:
 - `php artisan migrate:fresh --seed`
 - It will create an admin user with the credentials:
  ```
   E-mail: admin@laramovie.com
   Password: 12345678
  ```
 - If you'd like to change these default credentials, go to database/seeders and modify the DatabaseSeeder.php file in your favour.

### File uploading
 - In order to make file uploading work, run the command:
 - `php artisan storage:link`

### Used packages / services in development:
 - Breeze
 - Vite
 - Tailwind
 - TW-Elements
 - Laravel Lang
 - Heroicons
 - Alpine.js
 - Splide.js & AutoScroll