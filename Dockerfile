FROM php:8.4-fpm
RUN apt-get update && apt-get install -y \
  git \
  libzip-dev \
  zip \
  unzip \
  && docker-php-ext-install zip
RUN pecl install xdebug \
  && docker-php-ext-enable xdebug
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install opcache
RUN docker-php-ext-install pcntl
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
WORKDIR /var/www