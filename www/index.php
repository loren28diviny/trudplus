<!DOCTYPE html>
<?php include "ProcessorPHP/styleLoader.php";
	include "ProcessorPHP/Classes/Item.php";?>

<script>
if  (screen.width < '1024')
{
   document.link.href="style/Mobile/style.css";
   document.link.rel="stylesheet";
   document.link.type="text/css";
}
if  (screen.width == '1024')
{
	   document.link.href="style/1024px/style.css";
	   document.link.rel="stylesheet";
	   document.link.type="text/css";
	}
 if(screen.width > '1024') 
 {
	   document.link.href="style/PC/style.css";
	   document.link.rel="stylesheet";
	   document.link.type="text/css";
	}
</script>
<html>
<head>
<meta http-equiv="Content-Type"
		content="text/html; charset=utf-8" />
		<?php
		setlocale(LC_ALL, 'ru_RU.UTF-8');
		?>
<title>Охрана Труда</title>

</head>
<body>
<link href="" rel="" type="">

<div class="back">
<?php readfile("GUI/signin/form.html");
?>
<?php readfile("GUI/Menu/menu.html");?>
<?php $a=new Item();
	$a->getData('ol', 'dfdf', 'dfdfd', 'sdsds', 'sdsdsdddc');
	$a->writeData();
	$a->getData('ol', 'd12121212fdf', 'dfdf121212d', 'sd12121212sds', 'sdsds22232323dddc');
	$a->writeData();
	$a->getfromfile();?>
<?php 

?>
</div>

</body>

</html>