<?php
// vim: foldmethod=marker
/**
 *  Tutorial_ActionForm.php
 *
 *  @author     {$author}
 *  @package    Tutorial
 *  @version    $Id: 3593df9a65169faf443b824a2c5c8a80c7c84da1 $
 */

// {{{ Tutorial_ActionForm
/**
 *  ActionForm class.
 *
 *  @author     {$author}
 *  @package    Tutorial
 *  @access     public
 */
class Tutorial_ActionForm extends Ethna_ActionForm
{
    /**#@+
     *  @access private
     */

    /** @var    array   form definition (default) */
    var $form_template = array();

    /**#@-*/

    /**
     *  Error handling of form input validation.
     *
     *  @access public
     *  @param  string      $name   form item name.
     *  @param  int         $code   error code.
     */
    function handleError($name, $code)
    {
        return parent::handleError($name, $code);
    }

    /**
     *  setter method for form template.
     *
     *  @access protected
     *  @param  array   $form_template  form template
     *  @return array   form template after setting.
     */
    function _setFormTemplate($form_template)
    {
        return parent::_setFormTemplate($form_template);
    }

    /**
     *  setter method for form definition.
     *
     *  @access protected
     */
    function _setFormDef()
    {
        return parent::_setFormDef();
    }

}
// }}}

