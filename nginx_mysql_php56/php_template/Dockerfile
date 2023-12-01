FROM jasonyanko/base_image_nginx_mysql_php_56

COPY files /tmp/

RUN cp -rf /tmp/html /var/www/ \
    && sh -c 'mysqld_safe &' \
    && sleep 5s \
    && mysql -e "source /var/www/html/db.sql;" -uroot -proot \
    && rm -f /var/www/html/db.sql \
    && cp -f /tmp/flag.sh /flag.sh
RUN chown -R root:www-data /var/www/html
RUN chmod 555 /var/www/html/index.php