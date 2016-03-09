# Dockerfile for running Nginx linked to a separate PHP-FPM container

FROM debian:jessie

# update packages and install nginx
RUN apt-get update && apt-get install -y nginx

COPY nginx.conf /etc/nginx/
EXPOSE 80

CMD ["/usr/sbin/nginx", "-g", "daemon off;"]