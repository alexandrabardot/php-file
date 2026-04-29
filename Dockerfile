FROM php:8.2-fpm-alpine
WORKDIR /app
RUN docker-php-ext-install mysqli
COPY . .
EXPOSE 9000
