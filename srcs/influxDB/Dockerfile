FROM	alpine:latest

RUN		apk update && apk upgrade
RUN		apk add influxdb

#-----Telegraf-Setup-----#
RUN		apk add telegraf
COPY	./telegraf.conf /etc/telegraf/
#------------------------#

COPY	./setup.sh /

EXPOSE	8086 8083

CMD		["sh", "/setup.sh"]