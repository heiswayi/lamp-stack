ARG PHP_VERSION=""
FROM php:${PHP_VERSION:+${PHP_VERSION}-}fpm-alpine

RUN apk update; \
    apk upgrade;

RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo pdo_mysql

RUN apk add jpeg-dev libpng libpng-dev libjpeg-turbo-dev libwebp-dev zlib-dev libxpm-dev gd
RUN docker-php-ext-configure gd --with-jpeg
RUN docker-php-ext-install -j$(nproc) gd