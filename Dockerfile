FROM php:8.2-apache
COPY . /var/www/html/calculadora

# Expone el puerto 80 para que Apache pueda recibir tráfico web
EXPOSE 80