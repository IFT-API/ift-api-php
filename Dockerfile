FROM php:7.0-apache

COPY composer.json /var/www/

RUN apt-get update && \
    apt-get install -y --no-install-recommends git zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/

RUN composer install --no-interaction
