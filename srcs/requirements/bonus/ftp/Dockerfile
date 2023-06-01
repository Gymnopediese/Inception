FROM debian:buster

RUN apt update -y && \
	apt install vsftpd -y

COPY script .

CMD [ "sh", "script" ]