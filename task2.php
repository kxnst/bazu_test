<?php

$start = 0;
$end = 50;
$sub3  = "PHP";
$sub5 = "TEST";
for($i = $start; $i <= $end; $i++){
    if($i % 15 == 0){
        echo $sub3 . $sub5;
    }
    else if($i % 3 == 0){
        echo $sub3;
    }
    else if($i % 5 == 0) {
        echo $sub5;
    }
    else{
        echo $i;
    }
    echo '<br/>';
}