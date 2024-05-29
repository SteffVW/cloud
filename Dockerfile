FROM php:apache

COPY ./website /var/www/html

RUN docker-php-ext-install mysqli


