# Dockerfile

FROM php:8.3-fpm-alpine AS base

# Instala dependências do sistema e extensões do PHP para o Laravel e PostgreSQL
RUN apk add --no-cache \
    curl \
    git \
    zip \
    unzip \
    libzip-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    postgresql-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install -j$(nproc) gd pdo pdo_pgsql zip bcmath

# Define o diretório de trabalho dentro do container
WORKDIR /var/www

# Copia os arquivos da aplicação para o container
COPY . .

# Instala o Composer (gerenciador de dependências do PHP)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instala as dependências do projeto com o Composer
RUN composer install --no-interaction --no-plugins --no-scripts --prefer-dist

# Muda a propriedade dos arquivos para o usuário do servidor web (www-data)
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expõe a porta 9000 para o PHP-FPM
EXPOSE 9000

# Comando para iniciar o servidor PHP-FPM
CMD ["php-fpm"]
