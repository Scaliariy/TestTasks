<?php

function myArrowFunc(int $number) {

    $string = str_repeat("<", $number);
    $string .= str_repeat(">", $number);
    return $string;

}

echo myArrowFunc(9);