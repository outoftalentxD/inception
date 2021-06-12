FROM debian:buster

RUN apt-get -y update \
	&& apt-get -y install wget php php-zip php-gd php-cli php-fpm php-mysql

EXPOSE 9000

COPY wp-config.php /var/www/
COPY startup.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/startup.sh
ENTRYPOINT ["startup.sh"]
CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]