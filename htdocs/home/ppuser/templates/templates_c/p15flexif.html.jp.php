<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style TYPE="text/css">
<!--
h2 { marge-bottom:0; padding:5px width:400px; color:#FFFFFF;
background-color:#267333; border-left:12px solid #990026;
}

#kaiin { margin-top:0; padding:10px; width:400px; color: #000000;
background-color: #DCF0DF; border:1px solid #267333;
}
-->
</style>
</head>
<?php if ($t->member)  {?>
<h2>会員さまへのスペシャル情報</h2>
<p id="kaiin">
会員さまだけに，いちはやくお知らせする新商品情報です。
ご案内は<a href="#">こちら</a>からどうぞ。</p>
<?php }?>
<h3>当店の人気商品</h3>
<ul>
<li>もりもりうどん</li>
<li>シャキシャキドリンク</li>
<li>パパイア大福</li>
</ul>
</body>
</html>


<body>
<h1><?php echo $this->plugin("hs",$t->val);?></h1>
</body>
</html>