#-------------Security Check-------------------#

minikube stop
minikube delete

#------------Start the cluster-----------------#

minikube start --driver=docker

#---------Change-IP-in-all-files---------------#

MINIKUBE_IP="$(kubectl get nodes -owide | awk 'NR==2{print $6}')"
sed -i 's/MINIKUBE-IP/'$MINIKUBE_IP'/g' srcs/metallb.yaml
sed -i 's/MINIKUBE-IP/'$MINIKUBE_IP'/g' srcs/nginx/nginx.conf
sed -i 's/MINIKUBE-IP/'$MINIKUBE_IP'/g' srcs/nginx/index.html
sed -i 's/MINIKUBE-IP/'$MINIKUBE_IP'/g' srcs/ftps/vsftpd.conf
sed -i 's/MINIKUBE-IP/'$MINIKUBE_IP'/g' srcs/mysql/wordpress.sql

#----------MetalLB Installation----------------#

kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.5/manifests/namespace.yaml
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.5/manifests/metallb.yaml
kubectl create secret generic -n metallb-system memberlist --from-literal=secretkey="$(openssl rand -base64 128)" # On first install only

#--------------Docker Build--------------------#
#-Point-your-shell-to-minikube's-docker-daemon-#
eval $(minikube -p minikube docker-env)

docker build -t deployment/nginx srcs/nginx/
docker build -t deployment/mysql srcs/mysql/
docker build -t deployment/wordpress srcs/wordpress/
docker build -t deployment/ftps srcs/ftps/
docker build -t deployment/phpma srcs/phpma/
docker build -t deployment/influxdb srcs/influxDB/
docker build -t deployment/grafana srcs/grafana/

#---------------Deployment---------------------#

kubectl apply -f srcs/metallb.yaml
kubectl apply -f srcs/mysql/mysql.yaml
kubectl apply -f srcs/nginx/nginx.yaml
kubectl apply -f srcs/wordpress/wordpress.yaml
kubectl apply -f srcs/ftps/ftps.yaml
kubectl apply -f srcs/phpma/phpma.yaml
kubectl apply -f srcs/influxDB/influxdb.yaml
kubectl apply -f srcs/grafana/grafana.yaml

# Enable Dashboard and open it in the default web browser-#
# minikube status
minikube dashboard
