<?php
/**
 * {{THEME_CLASS}} theme Helper Class
 *
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/* Check if Class Exists. */
if ( ! class_exists( '{{Theme_ClassName}}ThemeHelper' ) ) {

  
    class {{Theme_ClassName}}ThemeHelper {

        public $social_links;

        public function __construct() {

            $this->social_links = array(
                'twitter' => array(
                    'key' => '{{theme_name}}_theme_twitter_link',
                    'label' => 'Twitter',
                    'class' => 'twitter-icon'
                ),
                'facebook' => array(
                    'key' => '{{theme_name}}_theme_facebook_link',
                    'label' => 'Facebook',
                    'class' => 'facebook-icon'
                ),
                'linkedin' => array(
                    'key' => '{{theme_name}}_theme_linkedin_link',
                    'label' => 'LinkedIn',
                    'class' => 'linkedin-icon'
                )
            );
        }

        public static function sort_date_array($a, $b) {
            return $b['date'] - $a['date'];
        }


    }
}


