FROM php:apache

RUN docker-php-ext-install mysqli

WORKDIR /Website

COPY . .

EXPOSE 80
