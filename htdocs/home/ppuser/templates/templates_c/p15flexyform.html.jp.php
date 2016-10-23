<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ピザの注文</title>
</head>
<body>
<?php echo $this->elements['pform']->toHtmlnoClose();?>
<p>生地の種類:
<?php echo $this->elements['pbase']->toHtml();?>
</p>
<p>サイズ:<br>
<?php 
                    $_element = $this->elements['psize_1'];
                    if (isset($this->elements['psize'])) {
                        $_element = $this->mergeElement($_element,$this->elements['psize']);
                    }
                    echo  $_element->toHtml();?>大
<?php 
                    $_element = $this->elements['psize_2'];
                    if (isset($this->elements['psize'])) {
                        $_element = $this->mergeElement($_element,$this->elements['psize']);
                    }
                    echo  $_element->toHtml();?>中
<?php 
                    $_element = $this->elements['psize_3'];
                    if (isset($this->elements['psize'])) {
                        $_element = $this->mergeElement($_element,$this->elements['psize']);
                    }
                    echo  $_element->toHtml();?>小
</p>
<p>トッピング:<br>
<?php 
                    $_element = $this->elements['tmpId1'];
                    if (isset($this->elements['ptop[]'])) {
                        $_element = $this->mergeElement($_element,$this->elements['ptop[]']);
                    }
                    echo  $_element->toHtml();?>ぺパロニ
<?php 
                    $_element = $this->elements['tmpId2'];
                    if (isset($this->elements['ptop[]'])) {
                        $_element = $this->mergeElement($_element,$this->elements['ptop[]']);
                    }
                    echo  $_element->toHtml();?>アンチョビ
<?php 
                    $_element = $this->elements['tmpId3'];
                    if (isset($this->elements['ptop[]'])) {
                        $_element = $this->mergeElement($_element,$this->elements['ptop[]']);
                    }
                    echo  $_element->toHtml();?>トマト
<?php 
                    $_element = $this->elements['tmpId4'];
                    if (isset($this->elements['ptop[]'])) {
                        $_element = $this->mergeElement($_element,$this->elements['ptop[]']);
                    }
                    echo  $_element->toHtml();?>ピーマン
<?php 
                    $_element = $this->elements['tmpId5'];
                    if (isset($this->elements['ptop[]'])) {
                        $_element = $this->mergeElement($_element,$this->elements['ptop[]']);
                    }
                    echo  $_element->toHtml();?>バジル
</p>
<p>お名前:<br>
<?php echo $this->elements['kname']->toHtml();?>
</p>
<p>連絡事項:<br>
<?php echo $this->elements['kcomm']->toHtml();?>
</p>
<input type="submit" value="注文する">
</form>
</body>
</html>
