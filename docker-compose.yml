FROM php:8.2-fpm-alpine
RUN apk add --no-cache nginx
RUN docker-php-ext-install mysqli
COPY . /app
COPY nginx.conf /etc/nginx/conf.d/default.conf
WORKDIR /app
EXPOSE 80
CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]
