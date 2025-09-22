<?php
$my_num;
$my_count;

function to_count($my_num, $my_count){
    if($my_num == 0){
        $my_num = 10;
    }
    
    $i = $my_count;
    /*for($i = $my_count; $i <= $my_num; $i = $i + $my_count){*/
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
echo to_count(0, 2);
?>