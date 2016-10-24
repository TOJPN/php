<?php

//! 認証処理サンプル	ログイン画面
require_once 'PpAuth.php';
require_once 'p41authopt.php';
$auth = new PpAuth($ppopts);
$auth ->loginProc();
?>
