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


$sql='SELECT zipcode, pref, city ,town FROM zipcodes';
$sql.=' WHERE zipcode >= ? AND zipcode <= ?';
//$sql .= 'WHERE zipcode >= 2070000 AND zipcode <= 2090000';
$sql.= ' ORDER BY zipcode ASC LIMIT 100';

$mincd='2070000';
$maxcd='2090000';

$sth = $dbh->stmt_init();
//	echo "<br>"; 	var_dump($sth); 	echo "<br>";
if($sth->prepare($sql)){
	$sth->prepare($sql);
//	$sth->prepare("SELECT zipcode, pref, city ,town FROM zipcodes WHERE zipcode >= ? AND zipcode <= ? ORDER BY zipcode ASC LIMIT 100");
	$sth->bind_param('ss', $mincd, $maxcd);
	$sth->execute();
	$sth->bind_result($code, $pref, $city ,$town);
	
//	echo "<br>"; 	print_r($sth); 	echo "<br>";

	echo '<html><body><table>', PHP_EOL;
	echo '<tr><th>郵便番号</th><th>都道府県</th>';
	echo '<th>市区町村名</th><th>町域名</th></tr>', PHP_EOL;
	
	while($sth->fetch()){
		echo '<tr><td>',htmlspecialchars($code,ENT_QUOTES,'UTF-8');
		echo '</td><td>',htmlspecialchars($pref,ENT_QUOTES,'UTF-8');
		echo '</td><td>',htmlspecialchars($city,ENT_QUOTES,'UTF-8');
		echo '</td><td>',htmlspecialchars($town,ENT_QUOTES,'UTF-8');
		echo '</td></tr>',PHP_EOL;
	}
	echo '</table></body></html>', PHP_EOL;
	
	$sth->close();
}

$dbh->close();

//echo 'あいうえお55';
?>
