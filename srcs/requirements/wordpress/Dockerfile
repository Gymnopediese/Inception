# Utiliser une image de base Debian
FROM debian:buster

# Mettre à jour les packages et installer les dépendances de WordPress et PHP-FPM
RUN apt-get -y update && apt-get -y upgrade && apt update -y && apt upgrade -y &&\
    apt-get install -y wget php-fpm php-mysql && \
	apt-get install -y curl

# Télécharger et installer WordPress
RUN apt install php-fpm php-mysql -y
RUN mkdir /var/www/ /var/www/html
# Configuration de PHP-FPM pour WordPress
EXPOSE 9000
COPY ./conf/script .
COPY ./conf/wp-config.php .
CMD [ "sh", "script" ]
