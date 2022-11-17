FROM php:8.0-apache
COPY . /var/www/html/ 
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN chown -R www-data:www-data /var/www/html/file/