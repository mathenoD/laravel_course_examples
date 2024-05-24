Middlewares in Laravel allow you to filter HTTP requests entering your application. 
They are often used for authentication, logging, and other tasks. 


1- Create Middleware
php artisan make:middleware EnsureAuthenticated

2- Register the middleware in app/Http/Kernel.php under the $routeMiddleware array
