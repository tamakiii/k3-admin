FROM php:7.2-fpm-alpine AS production

RUN apk add --update --no-cache bash git make

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
    php composer-setup.php --install-dir=/usr/local/sbin --filename=composer && \
    php -r "unlink('composer-setup.php');"

WORKDIR /app

# ---

FROM production AS development

# ---

FROM development AS debug

RUN apk add --update --no-cache --virtual .builddeps gcc libc-dev autoconf && \
    pecl install xdebug && \
    apk del .builddeps

COPY php.ini /usr/local/etc/php/conf.d/xdebug.ini
