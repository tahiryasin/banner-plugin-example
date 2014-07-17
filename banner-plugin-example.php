<?php

/**
 * Plugin Name: Banner Plugin Example
 * Plugin URI: https://github.com/tahiryasin/banner-plugin-example
 * Description: A simple plugin that adds a banner at bottom of each post and page.
 * Version: 1.0
 * Author: Tahir Yasin
 * Author URI: http://about.me/tahiryasin
 * License: GPLv2
 */
add_filter('the_content', 'wpt_append_banner');

function wpt_append_banner($content)
{
    if (is_single() || is_page())
    {
        $banner = '<div id="banner">
            <img src="http://www.achickwithbaggage.com/storage/site_graphics/ad_placeholder_banner.jpg" alt="banner" />
            </div>';
        return $content . $banner;
    }
    else
        return $content;
}