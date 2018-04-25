#! /bin/bash

create_mysql() {
    docker run --rm -d -p 3306:3306 --name mysql dabaopku/docker:Mysql
}

create_mongo() {
    docker run --rm -d -p 27017:27017 -v mongo:/data/db --name mongo dabaopku/docker:Mongo 
}

create_rockmongo() {
    docker run --rm -d -p 8081:80 --name rockMongo --link mongo:mongo dabaopku/docker:RockMongo
}

copy_volume() {
    docker run --rm -it -v $1:/from -v $2:/to alpine ash -c "cd /from; cp -av . /to"
}
