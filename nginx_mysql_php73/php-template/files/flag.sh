#!/bin/sh

sed -i "s#FLAGFLAGFLAG#$FLAG#" /var/www/html/login_success.html || true

export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh