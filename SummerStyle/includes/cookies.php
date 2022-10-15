<?php

$name ="Emal";
$value ="7";
$expirtion = time() + (60*60*24*7*4*12);

setcookie($name,$value,$expirtion);
?>
