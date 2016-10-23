<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>proPHPトラベル</title>
<style type="text/css">
<!--
body {margin:0; padding:0; font-family:Osaka,メイリオ,sans-serif;}
input { padding:2px; border:1px so;id #14191E; background: #1980E6; color:#FFFFFF;
font-size:120%; font-weigth:bold;}
input:hover{cursor:pointer;background:#3399FF;}
div { margin:20px; }
span{ font-size:120%; color:#E61980; padding-right:5px; }
h1 { margin:0; padding:10px; background-color:#0269A8; color:#FFFFFF; }
h2 { border-left:12px solid #264C73; border-bottom:2px solid #264C73; padding-left:10px;}
form{display:inline;}
#fm{ padding:0 20px 20px 20px; background-color:#DCE6F0; border:1px solid #264C73;}
-->

</style>
</head>
<body>
<h1>proPHP トラベル</h1>
<div>
<h2>おすすめツアー検索</h2>
<p>いくつかの質問に答えていくと, あなたにおススメのツアーを選びます。</p>
<div id="fm">
<p><span>Q<?php echo $this->plugin("hs",$t->qno);?></span><?php echo $this->plugin("hs",$t->qstr);?></p>
<?php echo $this->elements['a1f']->toHtmlnoClose();?>
<?php echo $this->elements['a1']->toHtml();?>
</form>
<?php echo $this->elements['a2f']->toHtmlnoClose();?>
<?php echo $this->elements['a2']->toHtml();?>
</form>
</div>
</div>
</body>
</html>
