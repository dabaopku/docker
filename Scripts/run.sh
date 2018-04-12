#! /bin/bash

docker run --rm -d -p 3306:3306 --name mysql dabaopku/docker:Mysql 

docker run --rm -d -p 27017:27017 --name mongo dabaopku/docker:Mongo 

docker run -it --rm  -p 8081:80 --link mongo:mongo rock