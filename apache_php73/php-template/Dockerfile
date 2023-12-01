FROM php:7.3.11-apache-stretch

COPY files/php.ini /usr/local/etc/php/php.ini
COPY files/start.sh /start.sh
COPY files/flag.sh /flag.sh

COPY src/. /var/www/html/.

RUN sh -c "chmod +x /flag.sh"
RUN sh -c "chmod +x /start.sh"

EXPOSE 80

CMD ["/start.sh"]