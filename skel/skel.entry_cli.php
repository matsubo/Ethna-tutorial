<?php
/**
 *  {$action_name}.php
 *
 *  @author     {$author}
 *  @package    Tutorial
 *  @version    $Id: e57de7d50846a1bd6724ad3384c60d4d344aa27c $
 */
chdir(dirname(__FILE__));
require_once '{$dir_app}/Tutorial_Controller.php';

ini_set('max_execution_time', 0);

Tutorial_Controller::main_CLI('Tutorial_Controller', '{$action_name}');
