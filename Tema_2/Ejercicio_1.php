<?php
$my_String = "Hello Word";
$my_Integer = 19;
$my_Double = 72.45;
$my_Boolean = true;

echo $my_String,"\n", $my_Integer,"\n", $my_Double, "\n", var_export($my_Boolean, true),"\n"."<br>";
echo $my_String."<br>". $my_Integer."<br>". $my_Double. "<br>".var_export($my_Boolean, true)."<br>";

const NAME = "alejandro jarque";
echo ucwords(NAME);
?>