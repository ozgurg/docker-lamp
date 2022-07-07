FROM php:8.1.6-apache@sha256:17ab11ea84038d3daa3bb945656fb14648f3a1dbf5f17d1c8458473563e80f5a

# Update
RUN apt-get -y update --fix-missing && \
    apt-get upgrade -y && \
    apt-get --no-install-recommends install -y apt-utils && \
    rm -rf /var/lib/apt/lists/*

# Install MySQL
RUN docker-php-ext-install mysqli pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# Enable Apache modules
RUN a2enmod rewrite headers

# Install Git, Unzip and Zip
RUN apt-get update && apt-get install -y git unzip zip

# Set workdir
WORKDIR /var/www/html

# Cleanup
RUN rm -rf /usr/src/*
