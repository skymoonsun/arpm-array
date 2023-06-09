FROM php:7.4-fpm

RUN apt update \
    && apt install -y zlib1g-dev git libzip-dev zip \
    && docker-php-ext-install opcache pdo pdo_mysql \
    && apt-get update && apt-get install -y \
               libjpeg62-turbo-dev \
               libpng-dev \
    && docker-php-ext-configure gd --with-jpeg \
    && docker-php-ext-install gd \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/app