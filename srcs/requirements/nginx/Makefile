.PHONY: all run clean re

DOCKER_IMAGE_NAME = nginx

all: $(DOCKER_IMAGE_NAME)

$(DOCKER_IMAGE_NAME):
	docker build -t $(DOCKER_IMAGE_NAME) .

host:
	sudo nano /etc/hosts

ps:
	docker compose ps

clean:
	-docker stop $(docker ps -a -q)
	-docker rm $(docker ps -a -q)
	-docker rmi $(DOCKER_IMAGE_NAME)

re: clean all

run: re
	docker run --env-file ../../.env -d -p "443:443" $(DOCKER_IMAGE_NAME)