<?php

require_once 'ppPage.php';

$page = new PpPage;
$dobj = new stdClass();
$dobj->member = false;

// 0:会員  1:非会員
$kaiin = 1;
if($kaiin === 1){
	$dobj->member = true;
}
$page->display('p15flexif.html',$dobj);

?>
