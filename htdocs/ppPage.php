<?php

require_once 'C:/Apache24/htdocs/HTML/Template/Flexy.php';
require_once 'C:/Apache24/htdocs/HTML/Template/Flexy/Element.php';
define('TEMPLATE_PATH','C:/Apache24/htdocs/home/ppuser/templates');

// ページ表示クラス
class PpPage {
	protected $flexy = null;
	
	// コンストラクタ
	public function __construct(){
		if(defined('E_DEPRECATED')){
			error_reporting(error_reporting() & ~(E_DEPRECATED | E_STRICT));
		}
	
	$options = array(
		'locale'		=> 'jp',
		'charset'		=> 'UTF-8',
		'templateDir'	=> TEMPLATE_PATH,
		'compileDir'	=> TEMPLATE_PATH . '/templates_c',
		'plugins'		=> array('PpFlexyPlugin' =>TEMPLATE_PATH . '/ppFlexyPlugin.php'));

	$GLOBALS['HTML_Template_Flexy']['options']['charset']= $options['charset'];

	$this->flexy = new HTML_Template_Flexy($options);
	}

	public function display($tmpl, $dobj=false, array $elem = array()){
		$this->flexy->compile($tmpl);
		$this->flexy->outputObject($dobj,$elem);
	}
}



?>
