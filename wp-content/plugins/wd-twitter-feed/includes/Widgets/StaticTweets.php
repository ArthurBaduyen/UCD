<?php
/**
 * @package    twitterfeed
 * @date       Fri Jul 08 2016 13:01:48
 * @version    2.1.6
 * @author     Askupa Software <hello@askupasoftware.com>
 * @link       http://products.askupasoftware.com/twitter-feed/
 * @copyright  2016 Askupa Software
 */

namespace TwitterFeed\Widgets;

class StaticTweets extends \TwitterFeed\Widgets\Widget
{
    public function get_components() 
    {
        return array_merge( 
            self::get_common_widget_components(), 
            self::get_common_tweet_ui_components('statictweets') 
        );
    }

    public function get_name() 
    {
        return 'Static Tweets [TF]';
    }

    public function render( $instance )
    {
        echo \TwitterFeed\static_tweets( $instance );
    }
}