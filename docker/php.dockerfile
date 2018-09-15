FROM php:7.2.9-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    #libmcrypt-dev \
    mysql-client libmagickwand-dev --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-install pdo_mysql intl #mcrypt

ADD . /var/www/storage
RUN chown -R www-data:www-data /var/www/storage