FROM php:5.6-fpm-alpine3.8 as php56
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" && sed -i 's/short_open_tag = Off/short_open_tag = On/' "$PHP_INI_DIR/php.ini" && docker-php-ext-install mysql
WORKDIR /var/www

FROM php:8.1.2-fpm-alpine3.15 as php81
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" && sed -i 's/short_open_tag = Off/short_open_tag = On/' "$PHP_INI_DIR/php.ini" && docker-php-ext-install mysqli
WORKDIR /var/www

FROM nginx:1.21.6 as nginx-baker
RUN usermod -u 82 nginx && \
    groupmod -g 82 nginx