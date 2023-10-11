# #FROM php:5.6-apache
# FROM php:7.4-apache


# #Update stretch repositories
# RUN sed -i s/deb.debian.org/archive.debian.org/g /etc/apt/sources.list
# RUN sed -i 's|security.debian.org|archive.debian.org/|g' /etc/apt/sources.list
# RUN sed -i '/stretch-updates/d' /etc/apt/sources.list
# RUN apt-get update

# RUN apt-get install --yes --force-yes cron g++ gettext libicu-dev openssl libc-client-dev libkrb5-dev  libxml2-dev libfreetype6-dev libgd-dev libmcrypt-dev bzip2 libbz2-dev libtidy-dev libcurl4-openssl-dev libz-dev libmemcached-dev libxslt-dev

# RUN a2enmod rewrite

# RUN docker-php-ext-install mysql 
# RUN docker-php-ext-enable mysql

# RUN docker-php-ext-configure gd --with-freetype-dir=/usr --with-jpeg-dir=/usr --with-png-dir=/usr
# RUN docker-php-ext-install gd

# RUN apt-get install --yes --force-yes libpq-dev

# # RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
# #     && docker-php-ext-install pgsql pdo_pgsql

FROM php:7.4
# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev 
RUN apt-get update && apt-get install -y \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Postgre PDO
RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# RUN pecl install xdebug-2.6.0alpha1
RUN pecl install xdebug-2.9.0 \
    && docker-php-ext-enable xdebug
RUN docker-php-ext-install mysqli
# COPY xdebug.ini /etc/php/7.2/apache2/conf.d/20-xdebug.ini
# RUN echo ';xdebug.scream=1' >> cxdebug.ini \
#     && echo 'xdebug.remote_enable=1' >> /usr/local/etc/php/conf.d/xdebug.ini \
#     && echo 'xdebug.remote_autostart=1' >> /usr/local/etc/php/conf.d/xdebug.ini \
#     && echo 'xdebug.remote_connect_back=1' >> /usr/local/etc/php/conf.d/xdebug.ini \
#     && echo 'xdebug.remote_port=9008' >> /usr/local/etc/php/conf.d/xdebug.ini \
#     && echo 'xdebug.remote_mode=req' >> /usr/local/etc/php/conf.d/xdebug.ini \
#     && echo 'xdebug.remote_handler=dbgp' >> /usr/local/etc/php/conf.d/xdebug.ini \
#     && echo 'xdebug.remote_log=/tmp/php5-xdebug.log'  >> /usr/local/etc/php/conf.d/xdebug.ini \
#     && echo "xdebug.remote_host=192.168.18.11"  >> /usr/local/etc/php/conf.d/xdebug.ini
    
RUN echo "xdebug.remote_host=192.168.12.125"          >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini                           
RUN echo "xdebug.remote_port=9008"                    >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini                                   
RUN echo "xdebug.remote_autostart=1"                    >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini                                   
RUN echo "xdebug.remote_enable=on"                    >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini  
RUN echo "xdebug.force_display_errors=on"             >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini  
RUN echo "xdebug.remote_handler = dbgp"               >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini 
RUN echo "xdebug.remote_mode = req"                   >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini 
RUN echo "xdebug.remote_log=/tmp/xdebug.log"          >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini 
