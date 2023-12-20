# Dockerfile

FROM laravelsail/php80-composer:latest

# Copie de votre application dans le conteneur
COPY ./ /var/www/html

# Installation des dépendances
RUN composer install --optimize-autoloader --no-dev

# Génération de la clé d'application
RUN php artisan key:generate --force

# Exécution des migrations et seeding en fonction de l'environnement
CMD ["sh", "-c", "php artisan migrate --seed --force --database=mysql_"$APP_ENV]
