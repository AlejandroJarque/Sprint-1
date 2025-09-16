<?php

function isBitten() {
    $random = rand(0, 1);
    if($random == 0) {
        return "Is bitten";
    }else {
        return "It's Not bitten";
    }
}

echo isBitten();
?>