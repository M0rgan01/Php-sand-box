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

# install symfony cli
RUN curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' | bash
RUN apt-get install -y symfony-cli

COPY / /usr/src/myapp
WORKDIR /usr/src/myapp