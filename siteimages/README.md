# SiteImages Module

## Introduction



## Maintainer Contact

 * Brian Teachman (Nickname: bteachman)
   <brian (at) teachmanweb (dot) com>

## Requirements

 * SilverStripe framework 3.0.0+ (or SilverStripe 2.3/2.4 for 1.0.0 version)
 * 

## Installation

 * Copy the `siteimages` directory into your main SilverStripe webroot
 * Run /dev/build/?flush=1

This should go in your `mysite/_config.php`.



## Usage



## Custom Theming

The standard themes may be too limiting for your needs.

Adding the following configuration to your _config.php file, will automatically set the field
to use a customisable template:

```php
	SiteImages::$js_options = array(
		'theme' => 'custom',
		'custom_theme_widget' => 'siteimage_widget'
	);
```

You can edit the design template by creating your own `[themedir]/templates/CustomRecaptchaField.ss` file.

## Known issues:


