#! /bin/bash

docker run --rm -d -p 3306:3306 --name mysql dabaopku/docker:Mysql 

docker run --rm -d -p 27017:27017 --name mongo dabaopku/docker:Mongo 

docker run --rm -d -p 8081:80 --name rockMongo --link mongo:mongo dabaopku/docker:RockMongo
