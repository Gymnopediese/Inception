# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: albaud <albaud@student.42.fr>              +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2023/05/07 00:47:04 by albaud            #+#    #+#              #
#    Updated: 2023/05/08 00:30:34 by albaud           ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

# Utiliser une image de base Debian
FROM debian:buster

RUN apt-get update && apt-get install -y mariadb-server && service mysql start

# Mettre à jour les packages et installer MariaDB
COPY ./conf/script ./
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/

CMD ["sh", "script"]