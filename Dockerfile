# Partimos de la imagen php en su versión 7.4
FROM php:8.2-fpm

ARG user
ARG uid

# Copiamos los archivos package.json composer.json y composer-lock.json a /var/www/

# Nos movemos a /var/www/

# Instalamos las dependencias necesarias
RUN apt-get update && apt-get install -y \
    build-essential \
    libzip-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    git \
    curl

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalamos extensiones de PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# Instalamos composer
RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash -
RUN apt-get install -y nodejs
RUN chmod +x /home
# Instalamos dependendencias de composer
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user
WORKDIR /var/www/
# Copiamos todos los archivos de la carpeta actual de nuestra 
# computadora (los archivos de laravel) a /var/www/
# Corremos el comando php-fpm para ejecutar PHP
USER $user