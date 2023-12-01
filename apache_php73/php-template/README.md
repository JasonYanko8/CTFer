# apache+php7.3
## 目录结构
```
.
├── Dockerfile   #生成镜像的脚本
├── files
│   ├── flag.sh  #替换flag.php中的FLAG生成动态flag的文件
│   ├── php.ini  #自定义php.ini
│   └── start.sh #启动Web服务、执行生成动态flag的脚本
└── src
    ├── flag.php #flag位置
    └── index.php#题目源码

2 directories, 6 files
```

## 介绍
适合出一些源代码审计的题目，源码配置完成后，进入Dockerfile目录，使用以下命令构建镜像
```
docker build -t 你的昵称/容器昵称 .
```
push到docker hub上后即可利用CTFd启动
```
docker push 你的昵称/容器昵称
```
