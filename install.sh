#!/bin/bash
# author: Brian Teachman <me@briant.me>

if command -v composer 2>/dev/null; then
    composer install
else
    curl -sS https://getcomposer.org/installer | php
    mv composer.phar composer
    composer install
fi

mkdir silverstripe-cache
chmod 0777 silverstripe-cache

mkdir logs
chmod 0777 logs

ln -s ./assets/Site-Images ./images
ln -s ./assets/Resources ./resources

echo "We're done here."
exit 0