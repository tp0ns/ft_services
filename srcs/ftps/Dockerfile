FROM	alpine:latest

RUN		apk update && apk upgrade
RUN		apk add vsftpd
RUN		apk add openssl

RUN		mkdir -p /etc/openssl
RUN		openssl req -x509 -nodes -newkey rsa:4096 -keyout /etc/openssl/key.key -out /etc/openssl/cert.crt -days 365 -subj "/C=FR/ST=Paris/L=Paris/O=42/OU=Org/CN=tpons"

COPY	./vsftpd.conf /etc/vsftpd/vsftpd.conf
RUN		echo "root:root" | chpasswd
COPY	./setup.sh /

#-----Telegraf-Setup-----#
RUN		apk add telegraf
COPY	./telegraf.conf /etc/telegraf/
#------------------------#

EXPOSE	21 1121

CMD		["sh", "/setup.sh"]