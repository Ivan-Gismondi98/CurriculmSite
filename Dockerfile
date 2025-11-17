FROM php:8.3-cli

# Install needed packages and SQLite extension
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        libsqlite3-dev \
        unzip \
        git \
    && docker-php-ext-install pdo_sqlite \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

# Default command: serve Laravel public/ via PHP's dev server
CMD ["php","-S","0.0.0.0:8000","-t","public"]
