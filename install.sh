#!/bin/bash
# author: Brian Teachman <me@briant.me>

if command -v composer 2>/dev/null; then
    php -d allow_url_fopen=On composer install
else
    curl -sS https://getcomposer.org/installer | php -d allow_url_fopen=On
    mv composer.phar composer
    php -d allow_url_fopen=On composer install
fi

mkdir -p --mode=777 silverstripe-cache
mkdir -p --mode=777 logs
mkdir -p --mode=777 assets/Uploads
mkdir -p --mode=777 assets/Site-Images
mkdir -p --mode=777 assets/Resources

ln -s ./assets/Site-Images ./images
ln -s ./assets/Resources ./resources

echo "We're done here."
exit 0