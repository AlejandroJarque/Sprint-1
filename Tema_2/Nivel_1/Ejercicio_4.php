<?php
$my_num = 0;
$my_count = 2;

function to_count( $my_count, $my_num = 10){ 
 
    $i = $my_count;
    while($i <= $my_num) {
        $total = $i + $my_count;

        if($total > $my_num){
            echo " ";
        }else {
            echo $i, " + ", $my_count, " = ", $total,"\n";
        }

        $i = $i + $my_count;
    }
}


echo to_count(2);
?>