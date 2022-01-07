composer install
php artisan key:generate
php artisan migrate
php artisan emailify:import storage/message_files/*.msg
