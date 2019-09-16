FROM php:7.2-fpm-alpine AS production

RUN apk add --update --no-cache bash git make

WORKDIR /app

# ---

FROM production AS development

# ---

FROM development AS debug

RUN apk add --update --no-cache --virtual .builddeps gcc libc-dev autoconf && \
    pecl install xdebug && \
    apk del .builddeps

COPY php.ini /usr/local/etc/php/conf.d/xdebug.ini
