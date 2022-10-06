FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    libpq-dev \
    git \
    zip \
    unzip

# install database driver
RUN docker-php-ext-install pdo pdo_pgsql pgsql

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY / /usr/src/myapp
WORKDIR /usr/src/myapp