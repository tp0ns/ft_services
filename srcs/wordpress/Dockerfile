FROM alpine:latest

RUN		apk update && apk upgrade

COPY	./setup.sh /

#Nginx setup
RUN		apk add nginx
RUN		mkdir -p /run/nginx
COPY	./nginx.conf /etc/nginx/

#Php setup
RUN		apk add php7-common php7-iconv php7-json php7-gd php7-curl \
		php7-xml php7-mysqli php7-imap php7-fpm php7-cgi fcgi php7-pdo \
		php7-pdo_mysql php7-soap php7-xmlrpc php7-posix php7-mcrypt \
		php7-gettext php7-ldap php7-ctype php7-dom

#Wordpress setup
RUN		apk add wget
RUN		mkdir -p /var/www/
RUN		wget http://wordpress.org/latest.tar.gz
RUN		mv /latest.tar.gz /var/www/
RUN		cd /var/www/ && tar -xzvf latest.tar.gz
COPY	./wp-config.php /var/www/wordpress/

#-----Telegraf-Setup-----#
RUN		apk add telegraf
COPY	./telegraf.conf /etc/telegraf/
#------------------------#

EXPOSE	5050

CMD		["sh", "/setup.sh"]
