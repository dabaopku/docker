FROM dabaopku/docker:Base

RUN apk upgrade --update && \
    apk add --no-cache mongodb && \
    rm /usr/bin/mongoperf

VOLUME /data/db
EXPOSE 27017

CMD ["mongod", "--bind_ip", "0.0.0.0", "--logpath", "/root/mongo.log"]
