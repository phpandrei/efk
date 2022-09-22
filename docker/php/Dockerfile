FROM php:7.2.23-fpm-buster

RUN apt-get update && apt-get install -y git

# PHP extensions
RUN docker-php-ext-install pdo_mysql

# Install opcache
RUN docker-php-ext-install opcache

# получить  композер подходящий для пыхи 7.2.3
COPY --from=composer:1.10.24 /usr/bin/composer /usr/bin/composer


# Копируем либо из папки докера с таким именем. Это php-fpm несколько пулов поддерживает
#COPY ./www.conf /usr/local/etc/php-fpm.d/www1.conf
#COPY ./custom.ini /usr/local/etc/php/conf.d/custom.ini


WORKDIR /var/www