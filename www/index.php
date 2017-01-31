<!DOCTYPE html>


<html>
<head>
<script>//if (screen.width <= '1024') 
 //  document.write ('<link href="style/mobile/menu.css" rel="stylesheet" type="text/css">'); 
   //else if (screen.width > '1024') document.write ('<link href="PC/mobile/menu.css" rel="stylesheet" type="text/css">');  
</script>

<meta http-equiv="Content-Type"
		content="text/html; charset=utf-8" />
		<?php
		setlocale(LC_ALL, 'ru_RU.UTF-8');
		?>
<title>Охрана Труда</title>

</head>
<body>
<script>if  (screen.width <= '1024')
   document.write('<link href="style/Mobile/style.css" rel="stylesheet" type="text/css">'); 
 if(screen.width > '1024') 
	 document.write('<link href="style/PC/style.css" rel="stylesheet" type="text/css">');  
</script>

<div class="back">
<?php readfile("signin/form.html");
?>
<?php readfile("Menu/menu.html");?>
<?php //readfile("Menu/topMenu.html");?>
<?php 
//include_once 'textstile.php';
//$TxT = new TextGui ( "my", "style.css" );
//$TxT->Text_echo ();
?>
</div>

</body>

</html>