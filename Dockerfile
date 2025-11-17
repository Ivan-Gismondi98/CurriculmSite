FROM php:8.3-cli

# Install needed packages and SQLite extension
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        libsqlite3-dev \
        unzip \
        git \
    && docker-php-ext-install pdo_sqlite \
    && rm -rf /var/lib/apt/lists/*

# Install Composer globally
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

WORKDIR /var/www/html

# Default command: serve Laravel public/ via PHP's dev server
CMD ["php","-S","0.0.0.0:8000","-t","public"]
