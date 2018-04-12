#!/bin/sh
composer install && \
php -d upload_max_filesize=1024M -d post_max_size=1024M -S 0.0.0.0:80