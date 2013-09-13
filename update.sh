#!/bin/bash
# author: Brian Teachman <me@briant.me>

if command -v composer 2>/dev/null; then
    php -d allow_url_fopen=On composer update
else
    curl -sS https://getcomposer.org/installer | php -d allow_url_fopen=On
    mv composer.phar composer
    php -d allow_url_fopen=On composer install
fi

echo "There we are then."
exit 0