# php-apache image
FROM php:8.1.18-apache

COPY . /var/www/html
RUN docker-php-ext-install mysqli pdo_mysql

RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R o-wx /var/www/html
WORKDIR /var/www/html

CMD ["apache2-foreground"]