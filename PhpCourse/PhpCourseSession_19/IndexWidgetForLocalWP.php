<?php

/*
 Plugin Name: My Ads Rotator
 Plugin URI: http://www.abelski.com
 Description: This is a simple plugin that shows rotating ads.
 Author: Haim Michael
 Version: 1.0
 Author URI: http://www.lifemichael.com
 */

//include_once('includes/AdsRotatorWidget.php');
include_once '../../PhpCourseSession_19/WidgetForLocalWP.php';

//add_action('widgets_init', 'AdsRotatorWidget::register_this_widget');

add_action('widgets_init', 'PicRotatorWidget::register_this_widget');
