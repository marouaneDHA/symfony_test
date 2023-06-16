update DATABASE_URL environment variable in .env


composer install


symfony console doctrine:database:create --if-not-exists

symfony console make:migrations

symfony console doctrine:migrations:migrate

symfony console doctrine:fixtures:load


symfony serve

https://127.0.0.1:8000/admin
