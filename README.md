
## Laravel-8 Authorization

A Simple Laravel app to perform authorization process.
First of all, make sure composer is installed in your computer.

Package required : Laravel ui for authentication

First of all, 
 >$git clone  https://github.com/VeshGrg/laravel8-authorization.git
   
Open the directory in terminal mode an run
 >$composer install
 
 >$cp .env.example .env
 
 >$php artisan key:generate
 
Create a database:
 >$php artisan migrate

For authentication template, use laravel/ui
 >$composer require laravel/ui
 
 >$php artisan ui vue --auth (vue for the frontend template-optional)
 
 >$php artisan serve
 
 Now you are ready to use the app.
