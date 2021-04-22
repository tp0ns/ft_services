mysql_install_db --user=root --datadir=/var/lib/mysql/
mysqld -u root & sleep 5
mysql -u root --execute="CREATE DATABASE wordpress;"
mysql -u root wordpress < /tmp/wordpress.sql
rm /tmp/wordpress.sql
mysql -u root --execute="CREATE USER 'root'@'%' IDENTIFIED BY 'root'; GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' WITH GRANT OPTION; USE wordpress; FLUSH PRIVILEGES;"

telegraf
