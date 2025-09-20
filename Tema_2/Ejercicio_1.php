<?php
$my_String = "Hello Word";
$my_Integer = 19;
$my_Double = 72.45;
$my_Boolean = true;

echo $my_String,"\n", $my_Integer,"\n", $my_Double, "\n", var_export($my_Boolean, true),"\n";

define("NAME", "Alejandro Jarque");
echo ucwords("NAME");
?>