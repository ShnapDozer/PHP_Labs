FROM php:8.2-fpm



WORKDIR /var/www/
COPY . .

RUN apt-get update && apt-get install -y \
      apt-utils \
      libpq-dev \
      libpng-dev \
      libzip-dev \
      zip unzip \
      git && \
      docker-php-ext-install pdo_pgsql && \
      docker-php-ext-install bcmath && \
      docker-php-ext-install gd && \
      docker-php-ext-install zip && \
      apt-get clean && \
      rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*




# Setup PHPXDebug
ARG XDEBUG_VERSION=3.2.0
ENV XDEBUG_MODE="debug,coverage"

RUN pecl install xdebug-${XDEBUG_VERSION}
RUN docker-php-ext-enable  xdebug

COPY /Docker/php/40-xdebug.ini $PHP_INI_DIR/conf.d/


ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
    --filename=composer \
    --install-dir=/usr/local/bin

