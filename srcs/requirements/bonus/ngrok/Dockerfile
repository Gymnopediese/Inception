# Use the official Debian base image
FROM debian:buster

# Install Python and pip
RUN apt-get -y update && apt-get -y upgrade && apt update -y && apt upgrade -y && apt install -y curl
RUN	curl -s https://ngrok-agent.s3.amazonaws.com/ngrok.asc | tee /etc/apt/trusted.gpg.d/ngrok.asc >/dev/null && echo "deb https://ngrok-agent.s3.amazonaws.com buster main" | tee /etc/apt/sources.list.d/ngrok.list &&  apt update && apt install ngrok
EXPOSE 4545
COPY script .
# Run the Python script
CMD ["sh", "script"]