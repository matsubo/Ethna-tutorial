<?php

require_once dirname(__FILE__) . '/../app/Tutorial_Controller.php';

/**
 * If you want to enable the UrlHandler, comment in following line,
 * and then you have to modify $action_map on app/Tutorial_UrlHandler.php .
 *
 */
// $_SERVER['URL_HANDLER'] = 'index';

/**
 * Run application.
 */
Tutorial_Controller::main('Tutorial_Controller', 'index');

