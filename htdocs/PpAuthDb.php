<?php

//!	認証処理サンプル	認証用データベース処理
class PpAuthDb{
	protected	$options = array();
	protected	$db = null;

	//! コンストラクタ
	public function __construct($opts = array()){
		$this->options = $opts;
	}

	//! DB 接続
	//! @return boolean true:OK false:NG
	protected function connect(){
		if(is_subclass_of($this->db, 'mysqli')){
			return ture;
		}
		$mysqli = @new mysqli(	$this->options['db_host'],
								$this->options['db_user'],
								$this->options['db_password'],
								$this->options['db_name']);
		if($mysqli->connect_errno === 0 ){
			$mysqli->set_charset($this->options['db_encoding']);
			$this->db = $mysqli;
			return true;
		}
		return false;
	}

	//! ユーザーに一致するパスワードを取得する
	public function getPasswd($user){
		if(!$this->connect()){
			return null;
		}
		$passwd = null;
		$sql = 'SELECT username, password FROM users WHERE username = ?';
		$sth = $this->db->stmt_init();
		if($sth->prepare($sql)){
			$sth->bind_param('s',$user);
			$sth->execute();
			$sth->bind_result($rs_user,$rs_passwd);
			if($sth->fetch()){
				$passwd = $rs_passwd;
			}
			$sth->close();
		}
		return $passwd;
	}
}
