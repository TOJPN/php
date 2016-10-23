<?php
//echo 'あいうえお11';
$dbh = @new mysqli('localhost', //ホスト
		'ppadmin',	//ユーザー名
		'ppadmin',		//パスワード
		'ppdb');	//DB名

if($dbh->connect_errno){
	die('Connect Error: ' . $dbh->connect_errno);
}


//echo 'あいうえお22';

$dbh->set_charset('utf8mb4');

//echo "<br>"; print_r($dbh); echo "<br>";

$sql='SELECT COUNT(*) FROM zipcodes';

if($result=$dbh->query($sql)){
	$row=$result->fetch_row();
	$cnt=$row[0];
	$result->close();
}
$dbh->close();

if($cnt != null){
	echo 'zipcodesテーブルのデータは、';
	echo '<b>';
	echo htmlspecialchars($cnt,ENT_QUOTES,'UTF-8');
	echo '</b>';
	echo ' 件です。';
}
else{
	echo 'エラーです';
}
?>
