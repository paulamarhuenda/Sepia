FROM php:8.1.3-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y git vim \
  && pecl install xdebug \
  && docker-php-ext-enable xdebug

# Copio xdebug.ini tuneado..
WORKDIR /usr/local/etc/php/conf.d
COPY php/docker-php-ext-xdebug.ini ./

#EXPOSE 9003
# Install PHP extensions
RUN docker-php-ext-install mysqli pdo_mysql

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY ./public /var/www
# Set working directory
WORKDIR /var/www
COPY ./public /var/www/public
