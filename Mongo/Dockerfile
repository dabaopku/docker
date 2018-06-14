FROM dabaopku/docker:Base

RUN apk upgrade --update && \
    apk add --no-cache 'mongodb=3.6.5-r0' && \
    rm /usr/bin/mongoperf

VOLUME /data/db
EXPOSE 27017

COPY run.sh /root
ENTRYPOINT ["/root/run.sh"]
CMD ["mongod", "--bind_ip", "0.0.0.0", "--logpath", "/root/mongo.log"]
