#!/bin/bash
# author: Brian Teachman <me@briant.me>
# 
# I assume that composer is installed.

composer.phar install

mkdir silverstripe-cache
chmod 0777 silverstripe-cache

mkdir logs
chmod 0777 logs

ln -s ./assets/Site-Images ./images

ln -s ./assets/Resources ./resources

echo "We're done here."
exit 0