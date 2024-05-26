FROM php:apache

COPY ./Website /var/www/html

RUN docker-php-ext-install mysqli

