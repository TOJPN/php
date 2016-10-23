<?php

require_once 'C:/Apache24/htdocs/HTML/Template/Flexy.php';

define('TEMPLATE_PATH','C:/Apache24/htdocs/home/ppuser/templates');

$options = array(
	'locale'	=> 'jp',
	'charset'	=> 'UTF-8',
	'templateDir'	=> TEMPLATE_PATH,
	'compileDir'	=> TEMPLATE_PATH . '/templates_c',
	'plugins'	=> array('PpFlexyPlugin' =>TEMPLATE_PATH . '/ppFlexyPlugin.php'));

$GLOBALS['HTML_Template_Flexy']['options']['charset']= $options['charset'];

$flexy=new HTML_Template_Flexy($options);

// 表示用データのオブジェクト
$dobj=new stdClass();
$dobj->val = '楽しい夏休み';

$flexy->compile('p15flexy.html');
$flexy->outputObject($dobj);

?>
