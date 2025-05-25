FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
    zip unzip git curl libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Change Apache DocumentRoot to Laravel's public folder
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Copy Composer from Composer image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
