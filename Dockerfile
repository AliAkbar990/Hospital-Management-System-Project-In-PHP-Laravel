# Stage 1: Build Frontend (Vite)
FROM node:18 AS frontend
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Stage 2: Backend (Laravel + PHP + Composer)
FROM php:8.2-fpm
WORKDIR /var/www

# Install PHP extensions
RUN apt-get update && apt-get install -y \
    git curl unzip libpq-dev libonig-dev libzip-dev zip \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy app files
COPY . .

# Copy built frontend
COPY --from=frontend /app/public/build ./public/build

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Laravel cache clear
RUN php artisan config:clear \
 && php artisan route:clear \
 && php artisan view:clear

# Serve on Render default port 10000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
