FROM debian:buster

RUN apt-get -y update && apt-get -y install mariadb-server
EXPOSE 3306

COPY configure.sh /
RUN chmod +x configure.sh
ENTRYPOINT ["/configure.sh"]
CMD ["mysqld"]
