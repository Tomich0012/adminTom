FROM php:7.4-apache

RUN apt-get update && \
    apt-get install -y libzip-dev libicu-dev libonig-dev zlib1g-dev mariadb-client && \
    docker-php-ext-install mysqli pdo pdo_mysql && \
    docker-php-ext-enable mysqli && \
    a2enmod rewrite
RUN apt update -y
RUN apt install net-tools -y
RUN apt install nano -y
RUN apt install iputils-ping -y
RUN apt install traceroute -y
RUN apt install dnsutils -y
RUN apt install traceroute -y
RUN apt install links -y
RUN apt install tcpdump -y

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY b2b.conf /etc/apache2/sites-available/b2b.conf

COPY certificate.crt /etc/ssl/certs/
COPY private.key /etc/ssl/certs/
COPY ca_bundle.crt /etc/ssl/certs/

RUN a2ensite 000-default.conf
RUN a2ensite b2b.conf

COPY . /var/www/html
COPY ./site_vitrine /var/www/html/site_vitrine
COPY ./b2b /var/www/html/b2b