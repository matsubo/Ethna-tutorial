<?php
/**
 *  {$view_path}
 *
 *  @author     {$author}
 *  @package    Tutorial
 *  @version    $Id: 6a152841e30d3c762e3a60c8ac0899a72c0641d2 $
 */

/**
 *  {$forward_name} view implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Tutorial
 */
class {$view_class} extends Tutorial_ViewClass
{
    /** @var boolean  layout template use flag   */
    var $use_layout = true;

    /**
     *  preprocess before forwarding.
     *
     *  @access public
     */
    function preforward()
    {
    }
}

