FROM php:apache

RUN docker-php-ext-install mysqli

WORKDIR /website

COPY . .

EXPOSE 80
