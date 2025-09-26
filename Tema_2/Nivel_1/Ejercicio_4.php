<?php
$my_num = 0;
$my_count = 2;

function to_count( $my_count, $my_num = 10){ 
    /*Explicacion, paso la variable con el valor por defecto de manera que no me haga falta darle un valor al llamar a la funcion mas abajo
    comnetar que el valor por defecto siempre a de ir despues de del parametro qeu no lo tenga*/
   /*if($my_num == 0){
        $my_num = 10;
    }*/
    
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


echo to_count(2);
?>