# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: albaud <albaud@student.42.fr>              +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2023/04/26 21:22:32 by albaud            #+#    #+#              #
#    Updated: 2023/06/03 17:50:50 by albaud           ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

all:
	docker-compose -f srcs/docker-compose.yml up --build --force-recreate

down:
	docker-compose -f srcs/docker-compose.yml down

re:
	docker-compose -f srcs/docker-compose.yml up --build --force-recreate

clean:
	-docker stop $(docker ps -qa)
	-docker rm $(docker ps -qa)
	-docker rmi -f $(docker images -qa)
	-docker volume rm $(docker volume ls -q)
	-docker network rm $(docker network ls -q) 2>/dev/null

nginx:
	docker build -t img-nginx srcs/requirements/nginx
	docker run -d -p "443:443" img-nginx
	echo connect here boy -> https://localhost/
