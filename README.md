COI Social
----------

PHP module intended to make adding social sharing buttons more enjoyable.
Includes Google Analytics hooks to enable tracking of share activity.

Basic Example
-------------

![COI Social Basic Example](http://pagesofinterest.net/images/github/coi-social/basic.png "COI Social Basic Example")

These buttons can be created with the following code:

```php
<?php
use COI\Social;

require_once 'include.php';

// Create a Manager instance with a Twitter, LinkedIn, Google Plus, Flattr & Facebook button
$socialManager = new Social\Manager(array(
    'twitter' => new Social\Twitter(array(
        'username' => '##TWITTER USERNAME##',
    )),
    'linkedIn' => new Social\LinkedIn(),
    'googleplus' => new Social\GooglePlus(array(
        'size' => 'medium'
    )),
    'flattr' => new Social\Flattr(array(
        'uid' => '##FLATTR USERNAME##',
        'button' => Social\Flattr\Button\COMPACT,
        'category' => Social\Flattr\Type\TEXT
    )),
    'github' => new Social\GitHub(array(
        'user' => 'faceleg',
        'repository' => 'COI-Social',
        'type' => Social\GitHub\Type\WATCH
    )),
    'facebook' => new Social\Facebook(array(
        'appId' => '##APP ID##',
        'width' => 350
    ))
)), array( // Second argument is an array of options common to all buttons
    'title' => 'The Title'
));

// Print the buttons' HTML
echo $socialManager->render();

// Print JavaScript for printed buttons
echo $socialManager->scripts();
?>
```

Single Button
-------------

![COI Social Single Button](http://pagesofinterest.net/images/github/coi-social/watch.png "COI Social Single Button")

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