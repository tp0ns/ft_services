FROM alpine

RUN 	apk update && apk upgrade
RUN 	apk add nginx
RUN		apk add php7-fpm php7-mbstring php7-mcrypt php7-soap php7-openssl \
		php7-gmp php7-pdo_odbc php7-json php7-dom php7-pdo php7-zip php7-mysqli \
		php7-sqlite3 php7-apcu php7-pdo_pgsql php7-bcmath php7-gd php7-odbc \
		php7-pdo_mysql php7-pdo_sqlite php7-gettext php7-xmlreader php7-xmlrpc \
		php7-bz2 php7-iconv php7-pdo_dblib php7-curl php7-ctype php7-common \
		php7-xml php7-imap php7-cgi fcgi php7-pdo php7-pdo_mysql php7-posix \
		php7-ldap php7-dom php7-session

#---NginX-setup---#
RUN		mkdir -p /run/nginx

COPY	./nginx.conf /etc/nginx/

#---phpMyAdmin---#
RUN 	mkdir -p var/www/
COPY 	phpMyAdmin-5.1.0-english.tar.gz /
RUN 	tar -xzvf phpMyAdmin-5.1.0-english.tar.gz && rm phpMyAdmin-5.1.0-english.tar.gz
RUN 	mv phpMyAdmin-5.1.0-english var/www/phpmyadmin
COPY 	config.inc.php /var/www/phpmyadmin/
RUN		mkdir -p var/www/phpMyAdmin/tmp/ && chmod 777 var/www/phpMyAdmin/tmp/

#-----Telegraf-Setup-----#
RUN		apk add telegraf
COPY	./telegraf.conf /etc/telegraf/
#------------------------#

COPY 	setup.sh /

EXPOSE	5000

ENTRYPOINT ["sh", "setup.sh"]
