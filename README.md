# Source files for [www.whvp.org](http://www.whvp.org)


## Install


### 1. Configure php.ini

/home/USER_NAME/path/to/php.ini

    asp_tags = Off
    safe_mode = Off
    magic_quotes_gpc = Off
    memory_limit = 48M
    date.timezone = "America/Vancouver" 
    upload_max_filesize = 20M
    post_max_size = 21M


### 2. Install Base Site


Clone site file to root web diectory

    $ cd /your/web/root
    $ git clone git@github.com:brianteachman/whvp.dev.git whvp

Run install script

    $ cd whvp
    $ chmod 0777 install.sh
    $ ./install.sh



Be sure to configure settings, mysite/_config.php

    YOUR_SITE/dev/build?flush=all


<http://doc.silverstripe.org/framework/en/installation/>