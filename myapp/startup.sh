# cp .env.example .env
# composer install
# touch /var/www/myapp/storage/logs/laravel.log
# chmod -R 777 /var/www/myapp/storage
# chmod -R 777 /var/www/myapp/bootstrap
# php artisan key:generate
# php artisan migrate
# php artisan db:seed

# bootstrap4導入
composer require laravel/ui 1.* --dev
php artisan ui bootstrap
npm install
npm run dev