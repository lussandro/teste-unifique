FROM php:5.6-apache
MAINTAINER Lussandro Ilha <lussandro@gmail.com>
WORKDIR /var/www/html
RUN docker-php-ext-install mysqli
