# VideoCloudy

[![Latest Stable Version](https://poser.pugx.org/mikuni-labo/videocloudy/v/stable)](https://packagist.org/packages/mikuni-labo/videocloudy)
[![Latest Unstable Version](https://poser.pugx.org/mikuni-labo/videocloudy/v/unstable)](https://packagist.org/packages/mikuni-labo/videocloudy)
[![License](https://poser.pugx.org/mikuni-labo/videocloudy/license)](https://packagist.org/packages/mikuni-labo/videocloudy)
[![composer.lock](https://poser.pugx.org/mikuni-labo/videocloudy/composerlock)](https://packagist.org/packages/mikuni-labo/videocloudy)

This library is Manipulate the VideoCloud API for PHP.

## Installation

### With Composer

```
$ composer require mikuni-labo/videocloudy
```

```json
{
    "require": {
        "mikuni-labo/videocloudy": "^1.0.0"
    }
}
```

## Example
```php
<?php
require 'vendor/autoload.php';

use MikuniLabo\VideoCloudy\VideoCloudy;

$vc = new VideoCloudy;

$vc->setAccountId( '0000000000000' );                 // Account ID
$vc->setClientId( 'xxxxxxxx-yyyy-zzzz-aaaa-bbbbbbb' );// Client ID
$vc->setClientSecret( 'xxxxxxxxxxxxxxxxxxxxxxxxx' );  // Client Secret
$vc->setVideoProfile( 'your-profile' );               // Video Profile
$vc->setCallbackUrl( 'http://your-callback-url/' );   // Callback URL

$vc->authenticate();

print_r( $vc->getVideos() );
```
