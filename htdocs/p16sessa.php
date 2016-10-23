<?php

require_once 'ppPage.php';
require_once 'ppSession.php';

// 質問データ
$amsg=array(	'エラーです',
				'西表島ジャングルツアー','ボルネオ島鍾乳洞ツアー',
				'夏の熱海温泉ツアー','ボラボラ島リゾートツアー',
				'冬の八ヶ岳スキーツアー','スイス氷河特急ツアー',
				'紋別流氷ツアー','南極クルーズツアー');
				
$ans = 0;

$sess= new PpSession('SESSQANDA');
if($sess->sessionExists()){
	$sess->start();
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$ans = (int)$sess->get('ans');
		if(isset($_POST['a1'])){
			$ans |= (1<<2);
		}
		
		if($ans >= 0 && $ans <= 7 ){
			$ans ++;
		}
	}
		$sess->endProc();
}

$dobj = new stdClass();
$dobj->ans = $amsg[$ans];
$dobj->ok = $ans ? true :false;
$page = new PpPage;
$page->display('p16sessa.html',$dobj);

?>
