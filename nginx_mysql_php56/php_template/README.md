# nginx+mysql+php5.6
## 目录结构
```
.
└── php_template_src
    ├── Dockerfile
    └── files
        ├── flag.sh
        └── html
            ├── db.sql
            └── index.php

3 directories, 4 files
```

## 介绍
适合出一些类似于sqli必须要使用数据库的题目，源码配置完成后，进入Dockerfile目录，使用以下命令构建镜像
```
docker build -t 你的昵称/容器昵称 .
```
push到docker hub上后即可利用CTFd启动
```
docker push 你的昵称/容器昵称
```
