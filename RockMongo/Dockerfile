FROM dabaopku/docker:Base

COPY ./rockmongo /root/rockmongo
WORKDIR /root/rockmongo

RUN apk upgrade --update && \
    apk add --no-cache php5-cli php5-dev php5-pear php5-openssl ca-certificates autoconf openssl-dev g++ make php5-json php5-phar curl && \
    ln -s /usr/bin/php5 /usr/bin/php && \
    pear update-channels && \
    php /usr/share/pear/peclcmd.php install mongodb && \
    echo "extension=mongodb.so" >> /etc/php5/php.ini && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer && \
    composer install && \
    apk del --purge php5-dev autoconf g++ make ca-certificates curl && \
    rm -rf /root/.composer /tmp/* /usr/share/* 

EXPOSE 80

ENTRYPOINT ["./run.sh"]
