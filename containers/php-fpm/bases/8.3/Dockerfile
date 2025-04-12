FROM php:8.3-fpm

ARG RUNTIME_PACKAGE_DEPS="msmtp libfreetype6 libjpeg62-turbo libwebp-dev libavif15 libgd3 unzip git rsync libzip-dev ssh libmemcached-dev"
ARG BUILD_PACKAGE_DEPS="libcurl4-openssl-dev libjpeg-dev libpng-dev libxml2-dev libonig-dev libavif-dev"
ARG PHP_EXT_DEPS="curl xml mbstring zip bcmath soap pdo_mysql gd mysqli intl"

# install dependencies and cleanup (needs to be one step, as else it will cache in the laver)
RUN apt-get update -y \
    && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
        $RUNTIME_PACKAGE_DEPS \
        $BUILD_PACKAGE_DEPS \
    && docker-php-ext-configure gd --with-jpeg --with-webp --with-avif \
    && docker-php-ext-install -j$(nproc) $PHP_EXT_DEPS \
    && apt-get clean \
    && apt-get autoremove -y \
    && apt-get purge -y --auto-remove $BUILD_PACKAGE_DEPS \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# install latest composer
RUN curl --silent --show-error https://getcomposer.org/installer | php && \
    mv /var/www/html/composer.phar /usr/local/bin/composer