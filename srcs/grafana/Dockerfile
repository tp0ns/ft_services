FROM	alpine:latest

RUN		apk	update && apk upgrade
RUN		apk add grafana

WORKDIR	/usr/share/grafana

#-----Telegraf-Setup-----#
RUN		apk add telegraf
COPY	./telegraf.conf /etc/telegraf/
#------------------------#

COPY    ./grafana.db /usr/share/grafana/data/grafana.db
COPY	./setup.sh /usr/share/grafana/

EXPOSE	3000

CMD		["sh", "setup.sh"]