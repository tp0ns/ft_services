FROM	alpine:latest

RUN		apk update && apk upgrade
RUN		apk add mysql mysql-client

RUN		mkdir -p /run/mysqld/

COPY	./my.cnf /etc/
COPY	./wordpress.sql /tmp/wordpress.sql

#-----Telegraf-Setup-----#
RUN		apk add telegraf
COPY	./telegraf.conf /etc/telegraf/
#------------------------#

COPY	./setup.sh /

EXPOSE	3306

CMD		["sh", "/setup.sh"]