FROM php:7.4-apache
RUN apt-get update && apt install netcat -y && docker-php-ext-install mysqli
WORKDIR /var/www/html
COPY app/ .
COPY wait.sh /wait.sh
RUN chmod +x /wait.sh
EXPOSE 80
ENTRYPOINT [ "/wait.sh" ]
CMD [ "apache2-foreground" ]