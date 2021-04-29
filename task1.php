<?php

include 'cal.php';

$cal = new Cal;

$cal->min(20);
$cal->add(20);

if (!is_null($cal->getResult())) {
    $cal->add(42);
}

echo $cal->getResult();
?>
