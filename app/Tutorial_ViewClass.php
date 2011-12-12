<?php
// vim: foldmethod=marker
/**
 *  Tutorial_ViewClass.php
 *
 *  @author     {$author}
 *  @package    Tutorial
 *  @version    $Id: 5ad478e7b12cf03245782e338267e1b14fb6d6cb $
 */

// {{{ Tutorial_ViewClass
/**
 *  View class.
 *
 *  @author     {$author}
 *  @package    Tutorial
 *  @access     public
 */
class Tutorial_ViewClass extends Ethna_ViewClass
{
    /**#@+
     *  @access protected
     */

    /** @var  string  set layout template file   */
    var $_layout_file = 'layout';

    /**#@+
     *  @access public
     */

    /** @var boolean  layout template use flag   */
    var $use_layout = true;

    /**
     *  set common default value.
     *
     *  @access protected
     *  @param  object  Tutorial_Renderer  Renderer object.
     */
    function _setDefault(&$renderer)
    {
    }

}
// }}}

