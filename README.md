PHP module intended to make adding social sharing buttons more enjoyable

[COI Social Information](http://pagesofinterest.net/code/tools/coi-social/ "More information")

**Basic Example**

![COI Social Basic Example](http://pagesofinterest.net/images/github/coi-social/basic.png "COI Social Basic Example")

These buttons can be created with the following code:

```php
<?php
use COI\Social;

require_once 'include.php';

// Create a Manager instance with a Twitter, LinkedIn, Google Plus, Flattr & Facebook button
$socialManager = new Social\Manager(array(
    'twitter' => new Social\Twitter(array(
        'username' => '##TWITTER USERNAME##'
    )),
    'linkedIn' => new Social\LinkedIn(),
    'googleplus' => new Social\GooglePlus(array(
        'size' => 'medium'
    )),
    'flattr' => new Social\Flattr(array(
        'uid' => '##FLATTR USERNAME##',
        'button' => 'compact',
        'category' => Social\Flattr\TEXT
    )),
    'facebook' => new Social\Facebook(array(
        'appId' => '##APP ID##',
        'width' => 350
    ))
), array( // Second argument is an array of options common to all buttons
    'title' => 'The Title'
));

// Print the buttons' HTML
echo $socialManager->buttons();

// Print JavaScript for printed buttons
echo $socialManager->scripts();
?>
```