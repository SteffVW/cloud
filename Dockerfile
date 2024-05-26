FROM php:apache

COPY ./Website /var/www/html

RUN docker-php-ext-install mysqli

WORKDIR /var/www/html

EXPOSE 80
PORT 80 3000
