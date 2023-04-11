<?php

/**
 * Scope: en que parte del codigo es valida tu variable o constante
 */

/*  $outside = "Variable global";

 echo $outside . PHP_EOL;

 function my_function(){
    global $outside;

    echo $outside;
 } */

 $outside = "Variable global";
 print_r($GLOBALS);
 echo $GLOBALS["outside"];
