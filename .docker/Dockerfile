FROM splitbrain/phpfarm:jessie

RUN apt-get update \
    && apt-get -y install wget zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY . /var/www/

WORKDIR /var/www/
