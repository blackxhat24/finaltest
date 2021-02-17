FROM php:7.4-apache

ADD index.php /var/www/html

RUN docker-php-ext-install mysqli
RUN chown -R www-data:www-data /var/www
RUN chmod -R 774 /var/www
RUN apache2ctl restart

EXPOSE 80
