<h1>les étapes pour utiliser le projet</h1>

<ul>
    <li>cd project-directory</li>
    <li>composer install</li>
    <li>cp .env.example .env</li>
    <li>php artisan key:generate</li>
    <li>php artisan cache:clear && php artisan config:clear</li>
    <li>créer database</li>
    <li>php artisan migrate --seed</li>
    <li>php artisan serve</li>
</ul>
