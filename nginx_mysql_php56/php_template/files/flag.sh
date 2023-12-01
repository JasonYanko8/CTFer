#!/bin/bash

# 修改数据库中的 FLAG
mysql -e "CREATE DATABASE IF NOT EXISTS lookhere;USE lookhere; CREATE TABLE IF NOT EXISTS \`wtf\` (\`fl4g\` varchar(100) NOT NULL) ENGINE=MyISAM  DEFAULT CHARSET=utf8;INSERT INTO \`wtf\` VALUES ('$FLAG');" -uroot -proot

export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh

