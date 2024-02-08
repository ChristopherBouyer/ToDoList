 1 - Cloner le dépôt

2 - Installer les dépendances du projet:

cd ToDoList
composer install

Modifier .env.example en .env

Le configurer si nécéssaire

Lancer la migration de la base de donnée

php artisan migrate

Lancer le serveur de développement:

php artisan serv
