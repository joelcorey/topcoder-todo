FROM php:7.2.9-fpm

WORKDIR /var/www

# Install Laravel relevant things
RUN apt-get update && apt-get install -y \
    #libmcrypt-dev \
    mysql-client libmagickwand-dev --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-install pdo_mysql intl #mcrypt

# Install Composer
RUN apt-get install -y --no-install-recommends git zip curl
#RUN curl --silent --show-error https://getcomposer.org/installer | php

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

ADD . /var/www/storage
RUN chown -R www-data:www-data /var/www/storage