FROM php:8.1.19-apache as php-apache


#Install system dependencies and PHP extensions
RUN apt-get update -y && apt-get install -y libicu-dev libmariadb-dev libpng-dev libjpeg-dev libfreetype6-dev zip unzip wget default-mysql-client && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql


WORKDIR /var/www
COPY . .

COPY --from=composer:2.5.7 /usr/bin/composer /usr/bin/composer

ENV PORT=8000
# Install wait-for-it
RUN wget -qO /usr/local/bin/wait-for-it.sh https://raw.githubusercontent.com/vishnubob/wait-for-it/master/wait-for-it.sh \
    && chmod +x /usr/local/bin/wait-for-it.sh

ENTRYPOINT [ "docker/entrypoint.sh" ] 

#start php-apache
CMD [ "apache2-foreground" ]