FROM debian:buster


RUN apt -y update && apt install -y nginx && apt install openssl -y

COPY ./conf/script .
COPY website/ ./website

CMD [ "sh", "script"]