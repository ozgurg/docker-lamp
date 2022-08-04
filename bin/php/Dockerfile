FROM php:8.1.8-apache@sha256:e7cdd5066544ebcfe63f019628b1bc625316513f8e68a7f7a62c543908f9d393

RUN apt-get -y update --fix-missing && \
    apt-get upgrade -y && \
    apt-get --no-install-recommends install -y apt-utils zlib1g-dev libpng-dev libzip-dev libwebp-dev libmagickwand-dev libjpeg62-turbo-dev && \
    rm -rf /var/lib/apt/lists/*

RUN apt-get update && apt-get install -y \
    && pecl install imagick \
	&& docker-php-ext-enable imagick

RUN docker-php-ext-install mysqli pdo_mysql zip exif

RUN docker-php-ext-configure gd --with-webp --with-jpeg=/usr/include/ &&\
    docker-php-ext-install gd

RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer && \
    composer clearcache

RUN a2enmod rewrite headers

WORKDIR /var/www/html

# Cleanup
RUN apt-get clean && \
    apt-get autoclean && \
    apt-get autoremove -y && \
    rm -rf /usr/src/*
