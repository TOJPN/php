<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>proPHPトラベル</title>
<style type="text/css">
<!--
body {margin:0; padding:0; font-family:Osaka,メイリオ,sans-serif;}
div { margin:20px; }
span{ font-size:120%; color:#E61980; padding-right:5px; }
h1 { margin:0; padding:10px; background-color:#0269A8; color:#FFFFFF; }
h2 { border-left:12px solid #264C73; border-bottom:2px solid #264C73; padding-left:10px;}
#fm{ padding:20px; background-color:#DCE6F0; border:1px solid #264C73;}
-->

</style>
</head>
<body>
<h1>proPHP トラベル</h1>
<div>
<h2>おすすめツアー検索結果</h2>
<div id="fm">
<span><?php echo $this->plugin("hs",$t->ans);?></span><?php if ($t->ok)  {?>をおすすめいたします。<?php }?>
</div>
<p><a href="p16sessq.php">おすすめツアー検索にもどる</a></p>
</body>
</html>
