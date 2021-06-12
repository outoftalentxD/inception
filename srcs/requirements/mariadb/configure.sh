#!/bin/bash
sed	-i "s/\#port/port /" /etc/mysql/mariadb.conf.d/50-server.cnf
sed -i "s/\#bind-address/bind-address/" /etc/mysql/mariadb.conf.d/50-server.cnf
sed -i "s/bind-address/\#bind-address/" /etc/mysql/mariadb.conf.d/50-server.cnf
chown -R mysql:mysql /var/lib/mysql
if [ ! -d /var/lib/mysql/wordpress ]; then
service mysql start
mysql -u root -e "CREATE DATABASE IF NOT EXISTS $MYSQL_DATABASE;"
mysql -u root -e "CREATE USER IF NOT EXISTS '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD';"
mysql -u root -e "GRANT ALL PRIVILEGES ON $MYSQL_DATABASE.* TO '$MYSQL_USER'@'%';"
mysql -u root -e "FLUSH PRIVILEGES;"
mysqladmin -u root password $MYSQL_ROOT_PASSWORD
service mysql stop
else
mkdir -p /var/run/mysqld
touch /var/run/mysqld/mysqld.pid
mkfifo /var/run/mysqld/mysql.sock
fi
chown -R mysql /var/run/mysqld/
chmod 755 /var/run/mysqld
exec "$@"