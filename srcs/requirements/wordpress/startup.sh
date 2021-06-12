#!/bin/bash
sed -i "s/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/" /etc/php/7.3/fpm/pool.d/www.conf
mkdir -p /run/php/
touch /run/php/php7.3-fpm.pid
chmod -R 755 /var/www/*
chown -R www-data:www-data /var/www/*
mkdir -p /var/www/html/
if [ ! -f /var/www/html/wp-config.php ]; then
	mv /var/www/wp-config.php /var/www/html/
	wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
	chmod +x wp-cli.phar
	mv wp-cli.phar /usr/local/bin/wordpress
	cd var/www/html/
	wordpress core download --allow-root
	wordpress core install --allow-root \
		--url=$WORDPRESS_URL \
		--title=$WORDPRESS_TITLE \
		--admin_user=$WORDPRESS_USER \
		--admin_password=$WORDPRESS_PASSWORD \
		--admin_email=$WORDPRESS_EMAIL
		wordpress user create --allow-root notmelaena notmelaena@notmelaena.fr --user_pass=notmelaena
fi
exec "$@"	