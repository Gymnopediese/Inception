# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: albaud <albaud@student.42.fr>              +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2023/04/26 21:22:32 by albaud            #+#    #+#              #
#    Updated: 2023/05/07 01:31:55 by albaud           ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

all:
	docker-compose -f srcs/docker-compose.yml up

down:
	docker-compose -f srcs/docker-compose.yml down
re:
	docker-compose -f srcs/docker-compose.yml up --build --force-recreate

nginx:
	docker build -t img-nginx srcs/requirements/nginx
	docker run -d -p "443:443" img-nginx
	echo connect here boy -> https://localhost/
