1. Migrations
Posts Table

php artisan make:migration create_posts_table --create=posts

Post Logs Table

php artisan make:migration create_post_logs_table --create=post_logs

2. Models
Post Model (app/Models/Post.php)

php artisan make:model Post
php artisan make:model PostLog

3. Views
Form and Table View (resources/views/posts/index.blade.php)

4. Controller (app/Http/Controllers/PostController.php)

php artisan make:controller PostController

5. Event (app/Events/PostCreated.php)

php artisan make:event PostCreated

6. Listener (app/Listeners/HandlePostCreated.php)

php artisan make:listener HandlePostCreated --event=PostCreated

7. Mail Content (app/Mail/PostCreated.php)

Email View (resources/views/emails/post_created.blade.php)

Final Step

Make sure to register the routes and event-listener bindings in web.php and EventServiceProvider respectively.
