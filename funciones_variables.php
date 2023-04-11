<?php

function michi(){
    echo "Meow" . PHP_EOL;
}

function dog(){
    echo "Woof" . PHP_EOL;
}

function zorro(){
    echo "Zorro no te lo lleves" . PHP_EOL;
}

$func = "zorro";

$func();

$func = "dog";

$func();

$func = "michi";

$func();