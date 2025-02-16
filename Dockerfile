FROM php:8.2-apache

WORKDIR /var/www/html

COPY .htaccess /var/www/html/.htaccess
COPY public/ /var/www/html/public
COPY views/ /var/www/html/views

RUN a2enmod rewrite
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

COPY apache-config.conf /etc/apache2/sites-available/000-default.conf
RUN a2ensite 000-default.conf

EXPOSE 80

CMD ["apache2-foreground"]