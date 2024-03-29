<?php
/**
 *  Tutorial_Controller.php
 *
 *  @author     {$author}
 *  @package    Tutorial
 *  @version    $Id: 544e1ff1753ff1f5a60ae17243638b068bc4cb09 $
 */

/** Application base directory */
define('BASE', dirname(dirname(__FILE__)));

/** include_path setting (adding "/app" and "/lib" directory to include_path) */
$app = BASE . "/app";
$lib = BASE . "/lib";
set_include_path(implode(PATH_SEPARATOR, array($app, $lib)) . PATH_SEPARATOR . get_include_path());


/** including application library. */
require_once 'Ethna/Ethna.php';
require_once 'Tutorial_Error.php';
require_once 'Tutorial_ActionClass.php';
require_once 'Tutorial_ActionForm.php';
require_once 'Tutorial_ViewClass.php';

/**
 *  Tutorial application Controller definition.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Tutorial
 */
class Tutorial_Controller extends Ethna_Controller
{
    /**#@+
     *  @access private
     */

    /**
     *  @var    string  Application ID(appid)
     */
    var $appid = 'TUTORIAL';

    /**
     *  @var    array   forward definition.
     */
    var $forward = array(
        /*
         *  TODO: write forward definition here.
         *
         *  Example:
         *
         *  'index'         => array(
         *      'view_name' => 'Tutorial_View_Index',
         *  ),
         */
    );

    /**
     *  @var    array   action definition.
     */
    var $action = array(
        /*
         *  TODO: write action definition here.
         *
         *  Example:
         *
         *  'index'     => array(
         *      'form_name' => 'Sample_Form_SomeAction',
         *      'form_path' => 'Some/Action.php',
         *      'class_name' => 'Sample_Action_SomeAction',
         *      'class_path' => 'Some/Action.php',
         *  ),
         */
    );

    /**
     *  @var    array   SOAP action definition.
     */
    var $soap_action = array(
        /*
         *  TODO: write action definition for SOAP application here.
         *  Example:
         *
         *  'sample'            => array(),
         */
    );

    /**
     *  @var    array       application directory.
     */
    var $directory = array(
        'action'        => 'app/action',
        'action_cli'    => 'app/action_cli',
        'action_xmlrpc' => 'app/action_xmlrpc',
        'app'           => 'app',
        'plugin'        => 'app/plugin',
        'bin'           => 'bin',
        'etc'           => 'etc',
        'filter'        => 'app/filter',
        'locale'        => 'locale',
        'log'           => 'log',
        'plugins'       => array('app/plugin/Smarty', 'lib/Ethna/extlib/Plugin/Smarty'),
        'template'      => 'template',
        'template_c'    => 'tmp',
        'tmp'           => 'tmp',
        'view'          => 'app/view',
        'www'           => 'www',
        'test'          => 'app/test',
    );

    /**
     *  @var    array       database access definition.
     */
    var $db = array(
        ''              => DB_TYPE_RW,
    );

    /**
     *  @var    array       extention(.php, etc) configuration.
     */
    var $ext = array(
        'php'           => 'php',
        'tpl'           => 'tpl',
    );

    /**
     *  @var    array   class definition.
     */
    var $class = array(
        /*
         *  TODO: When you override Configuration class, Logger class,
         *        SQL class, don't forget to change definition as follows!
         */
        'class'         => 'Ethna_ClassFactory',
        'backend'       => 'Ethna_Backend',
        'config'        => 'Ethna_Config',
        'db'            => 'Ethna_DB_PEAR',
        'error'         => 'Ethna_ActionError',
        'form'          => 'Tutorial_ActionForm',
        'i18n'          => 'Ethna_I18N',
        'logger'        => 'Ethna_Logger',
        'plugin'        => 'Ethna_Plugin',
        'session'       => 'Ethna_Session',
        'sql'           => 'Ethna_AppSQL',
        'view'          => 'Tutorial_ViewClass',
        'renderer'      => 'Ethna_Renderer_Smarty',
        'url_handler'   => 'Tutorial_UrlHandler',
    );

    /**
     *  @var    array       filter definition.
     */
    var $filter = array(
        /*
         *  TODO: when you use filter, write filter plugin name here.
         *  (If you specify class name, Ethna reads filter class in 
         *   filter directory)
         *
         *  Example:
         *
         *  'ExecutionTime',
         */
    );

    /**#@-*/

    /**
     *  Get Default language and locale setting.
     *  If you want to change Ethna's output encoding, override this method.
     *
     *  @access protected
     *  @return array   locale name(e.x ja_JP, en_US .etc),
     *                  system encoding name,
     *                  client encoding name(= template encoding)
     *                  (locale name is "ll_cc" format. ll = language code. cc = country code.)
     */
    function _getDefaultLanguage()
    {
        return array('ja_JP', 'UTF-8', 'UTF-8');
    }

    /**
     *  テンプレートエンジンのデフォルト状態を設定する
     *
     *  @access protected
     *  @param  object  Ethna_Renderer  レンダラオブジェクト
     *  @obsolete
     */
    function _setDefaultTemplateEngine(&$renderer)
    {
    }
}

