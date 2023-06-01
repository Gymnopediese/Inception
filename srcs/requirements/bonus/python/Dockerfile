# Use the official Debian base image
FROM debian:buster

# Install Python and pip
RUN apt-get update && apt-get install -y python3 python3-pip

# Set the working directory inside the container

# Copy the Python script to the working directory
COPY ./srcs ./srcs
WORKDIR /srcs

RUN pip3 install --no-cache-dir -r requirements.txt
EXPOSE 42424
# Run the Python script
CMD ["python3", "app.py"]