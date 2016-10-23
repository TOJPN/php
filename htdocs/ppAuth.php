<?php
// 認証処理サンプル　認証チェック処理クラス
require_once 'ppAuthLogin.php';
require_once 'ppSession.php';

// 認証チェック処理クラス
class PpAuth{
	protected $options = array();		// オプション
	protected $sessoption = array();	// セッションオプション
	protected $sessobj = null;			// セッションクラスオブジェクト
	
	//! コンストラクタ
	//! @param array $opts	オプション配列
	public function __construct(array $opts = array()){
		$this->setDefaults();
		if(is_array($opts) && count($opts) > 0){
			$this->options = aarray_merge($this->options,$opts);
		}
		
		$this->sessoption['timeout']=0;
		if(isset($opts['timeout'])){
			$this->sessoption['timeout'] = $opts['timeout'];	// セッションタイムアウト
		}
	}
	
	//! デフォルトオプション設定
	protected function setDefaults(){
		$this->options['db_host']			='localhost';
		$this->options['db_user']			='';
		$this->options['db_password']			='';
		$this->options['db_name']			='';
		$this->options['db_encoding']			='utf8mb4';
		$this->options['security_salt']			='';
		$this->options['cryptType']			='sha256';
		$this->options['tmplfile']			='ppLogin.html';
		$this->options['login_page']			='';
		$this->options['loginok_page']			='';
		$this->options['sessname']			='';
	}
	
	//! ログイン中かチェックする
		protected fuction chkLoginer(){
			$sess=new PpSession($this->options['sessname'],$this->sessoption);
			if(!$sess->sessionExists()){
				return false;
			}
			if(!$sess->start()){
				$sess->endProc();
				return false;
			}
			
			$this->sessobj = $sess;
			return true;
		}
	
	
	//! セッション処理オブジェクトを取得
	public function getSessObj(){
		return $this->sessobj;
	}
	
	// 未ログインならログイン画面へ遷移する
	public function isLogined(){
		if(!$this->chkLogined()){
			$url = 'Location: http://' . $_SERVER['HTTP_HOST'] . $this->options['login_page'];
			header($url,true,303); //ログイン画面へ遷移
			exit;
		}
	}
	
	//! ログイン処理
	public function loginProc(){
		$obj = new PpAuthLogin($this->options);
		$obj->loginProc();
	}
	
}