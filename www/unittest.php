<?php
error_reporting(E_ALL);
require_once dirname(__FILE__) . '/../app/Tutorial_Controller.php';

Tutorial_Controller::main('Tutorial_Controller', array(
    '__ethna_unittest__',
    )
);
