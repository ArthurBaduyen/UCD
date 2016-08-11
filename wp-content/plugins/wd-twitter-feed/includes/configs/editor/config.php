<?php
/**
 * @package    twitterfeed
 * @date       Fri Jul 08 2016 13:01:48
 * @version    2.1.6
 * @author     Askupa Software <hello@askupasoftware.com>
 * @link       http://products.askupasoftware.com/twitter-feed/
 * @copyright  2016 Askupa Software
 */


$common = include( dirname( __DIR__ ).'/common.php' );

return new Amarkal\Extensions\WordPress\Editor\Plugin(array(
    'slug'      => 'twitterfeed_button',
    'row'       => 1,
    'script'    => TwitterFeed\JS_URL.'/editor.js',
    'callback'  => array(
        'statictweets'      => new Amarkal\Extensions\WordPress\Editor\FormCallback( $common['statictweets'] ),
        'scrollingtweets'   => new Amarkal\Extensions\WordPress\Editor\FormCallback( $common['scrollingtweets'] ),
        'slidingtweets'     => new Amarkal\Extensions\WordPress\Editor\FormCallback( $common['slidingtweets'] )
    )
));
