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


### 2. Install Site


Clone site file to root web diectory

    $ cd /your/web/root
    $ git clone git@github.com:brianteachman/whvp.dev.git whvp

Run install script

    $ cd whvp
    $ chmod 0777 update.sh
    $ chmod 0777 install.sh
    $ ./install.sh

Install Database

    <!-- @todo whvp.sql -->

Since I have not yet finished the schema, we'll rebuild

    YOUR_SITE/dev/build?flush=all

Overwrite mysite/_config.php with mysite/_config.php.bak
    
    $ mv mysite/_config.php.bak mysite/_config.php

Rebuild the database again

    YOUR_SITE/dev/build?flush=all


### 3. Configure Site

1. Upload Site Images & Resources into respective Uploads directory, located at `http://yoursite/admin/assets`



<http://doc.silverstripe.org/framework/en/installation/>