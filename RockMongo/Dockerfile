FROM dabaopku/docker:Base

RUN apk upgrade --update && \
    apk add --no-cache php5-cli php5-dev php5-pear php5-openssl ca-certificates autoconf openssl-dev g++ make && \
    ln -s /usr/bin/php5 /usr/bin/php && \
    pear update-channels

RUN php /usr/share/pear/peclcmd.php install mongodb
    
RUN apk add php5-json curl php5-phar

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer 

COPY ./rockmongo /root/rockmongo
COPY ./php.ini /etc/php5/php.ini

WORKDIR /root/rockmongo
EXPOSE 80

ENTRYPOINT ["./run.sh"]
