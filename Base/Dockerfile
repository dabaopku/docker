FROM alpine:3.7

RUN apk update && apk upgrade \
  && apk add ca-certificates \
  && apk add bash gawk sed grep bc coreutils \
  && rm -rf /var/cache/apk \
  && rm -rf /usr/share/terminfo

ENTRYPOINT /bin/bash
