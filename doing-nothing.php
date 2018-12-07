<?php

/*
Plugin Name: Doing Nothing
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Doing nothing, but uses updates :) NOTE: update has no meta link due security reasons. You have to renew it each update!!!
Version: 1.02
Author: gogasan
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

require __DIR__.'/inc/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    '',
    __FILE__, //Full path to the main plugin file or functions.php.
    'doing-nothing'
);

$myUpdateChecker->checkForUpdates();


//BLAH!

