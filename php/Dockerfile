FROM php:8.2-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libpq-dev \
    libonig-dev \
    libzip-dev \
    nodejs \
    npm

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#RUN groupadd -g 1000 www
#RUN useradd -u 1000 -ms /bin/bash -g www www
#
#COPY . /var/www
#COPY --chown=www:www . /var/www
#
#USER www


RUN npm install -g @vue/cli
RUN docker-php-ext-install pcntl

EXPOSE 9000
COPY ./init.sh /usr/bin/entrypoint.sh
COPY php.ini /usr/local/etc/php/php.ini
ENTRYPOINT ["entrypoint.sh"]
#CMD ["php-fpm"]
