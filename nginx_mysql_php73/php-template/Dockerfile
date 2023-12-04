FROM jasonyanko/base_image_nginx_mysql_php_73

LABEL Author="jasonaynko <jasonyanko8@outlook.com>"

COPY ./files /tmp/
RUN cp -rf /tmp/html /var/www/ \
    && sh -c "mysqld_safe &" \
    && chown -R www-data:www-data /var/www/html \
    && cp -f /tmp/flag.sh /flag.sh \
    && sleep 5 \
    && mysql -e "source /var/www/html/db.sql;" -uroot -proot \
    && rm -f /var/www/html/db.sql \
    && sed -i 's/skip-network/#skip-network/' /etc/my.cnf.d/mariadb-server.cnf