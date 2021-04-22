FROM	alpine:latest

RUN		apk update && apk upgrade
RUN		apk add nginx
RUN		apk add openssl

#--Openssl-setup--#

RUN		mkdir -p /etc/openssl 
RUN		openssl req -x509 -nodes -newkey rsa:4096 -keyout /etc/openssl/key.key -out /etc/openssl/cert.crt -days 365 -subj "/C=FR/ST=Paris/L=Paris/O=42/OU=Org/CN=tpons"

#---NginX-setup---#
RUN		mkdir -p /run/nginx

COPY	./nginx.conf /etc/nginx/
COPY	./index.html /var/www/

#-----Telegraf-Setup-----#
RUN		apk add telegraf
COPY	./telegraf.conf /etc/telegraf/
#------------------------#

COPY	./setup.sh /

EXPOSE	80 443

CMD		["sh", "/setup.sh"]
