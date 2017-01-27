<?php

$name="lol";
$category;


$fp = fopen("$name.html", "w");

// записываем в файл текст
fwrite($fp, $text);

// закрываем
fclose($fp);
?>