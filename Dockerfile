FROM php:8.2-apache

# mysqli install
RUN docker-php-ext-install mysqli

# project copy
COPY . /var/www/html/

# apache permission fix
RUN chown -R www-data:www-data /var/www/html