# We gebruiken php:apache omdat we een webserver nodig hebben
FROM php:apache

# Mijn php/code staat in een mapje genoemd src dus ik zet deze vervolgens over naar de container directory
COPY ./Website /var/www/html

RUN docker-php-ext-install mysqli

WORKDIR /var/www/html

EXPOSE 80
