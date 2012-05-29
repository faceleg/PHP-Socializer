PHP Socializer
----------

PHP module intended to make adding social sharing buttons more enjoyable.
Includes Google Analytics hooks to enable tracking of share activity.

Currently supports Twitter, Facebook, Google Plus, LinkedIn, StumbleUpon, GitHub and Flattr buttons.

Basic Example
-------------

![PHP Socializer Basic Example](http://pagesofinterest.net/images/github/coi-social/basic.png "PHP Socializer Basic Example")

These buttons can be created with the following code:

```php
<?php
use COI\Social;

require_once 'include.php';

/* Somehere in your config */
 
// Create a manager for the Twitter, Google+ & LinkedIn button set
new Social\Manager(array(
    'twitter' => new Social\Twitter(array(
        'username' => 'pagesofinterest',
    )),
    'googleplus' => new Social\GooglePlus(array(
        'size' => 'medium'
    )),
    'linkedIn' => new Social\LinkedIn()
), array(
    'fadeIn' => 400
));
 
/* Where the buttons should be displayed */
echo $socialManager->render(array(
    // These options override those used in the manager initialisation above
    'url' => 'http://pagesofinterest.net/',
    'title' => 'Pages of Interest', 
));
 
/* In your footer, just above the closing <body> tag */
// Output the <script> with src pointing to the combined, compressed & cached JavaScript
echo COI\Social\Manager::combinedJavaScript(array(
    'compression' => 'booster',
    'cacheDirectory' => '/var/www/pagesofinterest.net/public/js/php-socializer',
    'publicCacheDirectory' => '/js/php-socializer'));
?>
```

Single Button
-------------

![PHP Socializer Single Button](http://pagesofinterest.net/images/github/coi-social/watch.png "PHP Socializer Single Button")

To render a single button, use the following syntax:

```php
<?php
use COI\Social;

require_once 'include.php';

// Render a single button
echo Social\GitHub(array(
    'user' => 'faceleg',
    'repository' => 'COI-Social',
    'type' => Social\GitHub\Type\WATCH
));
?>
```

Credits
-------

GitHub buttons created by Mark Dotto - [GitHub buttons](http://markdotto.github.com/github-buttons/ "GitHub Buttons").