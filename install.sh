#!/bin/bash
# author: Brian Teachman <me@briant.me>

if command -v composer 2>/dev/null; then
    composer install
else
    curl -sS https://getcomposer.org/installer | php
    mv composer.phar composer
    composer install
fi

mkdir -p --mode=755 silverstripe-cache
mkdir -p --mode=755 logs
mkdir -p --mode=755 assets/Uploads
mkdir -p --mode=755 assets/Site-Images
mkdir -p --mode=755 assets/Resources

ln -s ./assets/Site-Images ./images
ln -s ./assets/Resources ./resources

echo "We're done here."
exit 0