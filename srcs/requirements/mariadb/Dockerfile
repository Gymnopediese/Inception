# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: albaud <albaud@student.42.fr>              +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2023/05/07 00:47:04 by albaud            #+#    #+#              #
#    Updated: 2023/06/03 16:46:10 by albaud           ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

# Utiliser une image de base Debian
FROM debian:buster

RUN apt-get update -y && apt-get install mariadb-server -y && apt-get install procps -y

# Mettre à jour les packages et installer MariaDB
COPY ./conf/script ./
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/

CMD ["sh", "script"]