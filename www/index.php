<?php iconv_set_encoding('output_encoding','ISO-8859-5')  ?>
<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Охрана Труда</title>
</head>
<body>
<div>
<?php
//setlocale(LC_ALL, 'ru_RU.UTF-8');
include_once 'textstile.php';
$TxT  = new TextGui("my", "style.css");
$TxT->Text_echo();
?>
</div> 
</body>
</html>