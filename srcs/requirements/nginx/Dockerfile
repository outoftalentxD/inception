FROM debian:buster

RUN apt-get -y update
RUN apt-get -y install nginx \ 
	openssl \
	vim

RUN openssl req -x509 -nodes -days 60 -newkey rsa:2048 \
    -keyout /etc/ssl/private/ssl.key \
    -out    /etc/ssl/certs/ssl.crt \
    -subj   "/C=RU/ST=Moscow/L=Moscow/O=21school/CN=melaena"

EXPOSE 443
COPY nginx.conf /etc/nginx/sites-available/nginx.conf
RUN ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled/nginx.conf
RUN rm -rf /etc/nginx/sites-available/default
RUN sed -i "s/sites-enabled\/\*/sites-enabled\/\*\.\*/" /etc/nginx/nginx.conf
CMD ["nginx", "-g", "daemon off;"]