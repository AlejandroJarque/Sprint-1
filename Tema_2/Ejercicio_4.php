<?php
$my_num = 0;
$my_count = 2;

function to_count($my_num, $my_count){
    if($my_num == 0){
        $my_num = 10;
    }

    for($i = $my_count; $i <= $my_num; $i = $i + $my_count){
        $total = $i + $my_count;

        if($total > $my_num){
            echo " ";
        }else {
            echo $i, " + ", $my_count, " = ", $total,"\n";
        }
    }
}
echo to_count($my_num, $my_count);
?>