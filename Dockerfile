FROM php:8.2-apache

# Fix Apache MPM conflict
RUN a2dismod mpm_event && a2enmod mpm_prefork

# Enable MySQL support
RUN docker-php-ext-install mysqli

# Copy your files
COPY . /var/www/html/

EXPOSE 80
