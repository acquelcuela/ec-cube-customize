FROM php:7-fpm

ENV APACHE_DOCUMENT_ROOT /var/www/html

RUN apt-get update \
  && apt-get install --no-install-recommends -y \
    apt-transport-https \
    apt-utils \
    build-essential \
    curl \
    debconf-utils \
    gcc \
    git \
    vim \
    zip \
    gnupg2 \
    libfreetype6-dev \
    libicu-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libpq-dev \
    libzip-dev \
    locales \
    ssl-cert \
    unzip \
    zlib1g-dev \
    iputils-ping \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/* \
  && echo "en_US.UTF-8 UTF-8" >/etc/locale.gen \
  && locale-gen \
  ;

RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
  && docker-php-ext-install -j$(nproc) zip gd mysqli pdo_mysql opcache intl pgsql pdo_pgsql \
  ;

RUN pecl install apcu && echo "extension=apcu.so" > /usr/local/etc/php/conf.d/apc.ini
COPY ./docker/docker-php/php.ini /usr/local/etc/php/conf.d/php.ini

RUN curl -sS https://getcomposer.org/installer \
  | php \
  && mv composer.phar /usr/bin/composer

RUN composer config -g repos.packagist composer https://packagist.jp

ARG XDEBUG_INSTALL
ARG BOOL=true

RUN if [ ${XDEBUG_INSTALL} = ${BOOL} ]; then \
      pecl install xdebug-3.1.5 && docker-php-ext-enable xdebug; \
    fi

COPY ./docker/docker-php/entrypoint-dev.sh /entrypoint-dev.sh
ENTRYPOINT ["/entrypoint-dev.sh"]

CMD ["php-fpm"]
