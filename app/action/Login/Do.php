<?php
/**
 *  Login/Do.php
 *
 *  @author     {$author}
 *  @package    Tutorial
 *  @version    $Id: 313d2f94a569be1b093001aa38bb6769a72827a6 $
 */

/**
 *  login_do Form implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Tutorial
 */
class Tutorial_Form_LoginDo extends Tutorial_ActionForm
{
    /**
     *  @access private
     *  @var    array   form definition.
     */
    var $form = array(
       /*
        *  TODO: Write form definition which this action uses.
        *  @see http://ethna.jp/ethna-document-dev_guide-form.html
        *
        *  Example(You can omit all elements except for "type" one) :
        *
        */
        'user_name' => array(
            // Form definition
            'type'        => VAR_TYPE_STRING, // Input type
            'form_type'   => FORM_TYPE_TEXT,  // Form type
            'name'        => 'ユーザ名',      // Display name

            //  Validator (executes Validator by written order.)
            'required'    => true,            // Required Option(true/false)
            'mbregexp_encoding' => 'UTF-8',   // Matching encoding when using mbregexp 
        ),
       'password' => array(
            // Form definition
            'type'        => VAR_TYPE_STRING, // Input type
            'form_type'   => FORM_TYPE_PASSWORD,  // Form type
            'name'        => 'パスワード',      // Display name

            //  Validator (executes Validator by written order.)
            'required'    => true,            // Required Option(true/false)
            'min'         => 4,            // Minimum value
            'mbregexp_encoding' => 'UTF-8',   // Matching encoding when using mbregexp 
        ),

     );

    /**
     *  Form input value convert filter : sample
     *
     *  @access protected
     *  @param  mixed   $value  Form Input Value
     *  @return mixed           Converted result.
     */
    /*
    function _filter_sample($value)
    {
        //  convert to upper case.
        return strtoupper($value);
    }
    */
}

/**
 *  login_do action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Tutorial
 */
class Tutorial_Action_LoginDo extends Tutorial_ActionClass
{
    /**
     *  preprocess of login_do Action.
     *
     *  @access public
     *  @return string    forward name(null: success.
     *                                false: in case you want to exit.)
     */
    function prepare()
    {
        if ($this->af->validate() > 0) {
            return 'login_form';
        }
        return null;
    }

    /**
     *  login_do action implementation.
     *
     *  @access public
     *  @return string  forward name.
     */
    function perform()
    {
        if (!($this->af->get('user_name') == 'matsu' && $this->af->get('password') == 'password')) {
            $this->ae->add('', '正しいユーザ名とパスワードを入力してください');
            return 'login_form';
        }
        $this->af->setApp('user_name', $this->af->get('user_name'));
        return 'login_do';
    }
}

