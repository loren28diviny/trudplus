<?php

$name;
$category;
$subcategory;
$price;
$photo;



$fp = fopen("$name.html", "w");

// записываем в файл текст
fwrite($fp, $text);

// закрываем
fclose($fp);
?>