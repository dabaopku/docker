FROM dabaopku/docker:Base

RUN apk add --no-cache mysql mysql-client && \
	addgroup mysql mysql

VOLUME ["/var/lib/mysql"]
EXPOSE 3306

COPY run.sh /root
ENTRYPOINT ["/root/run.sh"]
