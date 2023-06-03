FROM debian:buster

RUN apt update -y && apt install wget -y && apt-get install php php-mysql -y && \
	wget "http://www.adminer.org/latest.php" -O /var/www/html/adminer.php  && \
	chown -R www-data:www-data /var/www/html/adminer.php && \
	chmod 755 /var/www/html/adminer.php
WORKDIR /var/www/html/

CMD [ "php", "-S", "0.0.0.0:80"]