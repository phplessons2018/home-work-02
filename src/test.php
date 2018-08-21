<?php

function calcEverything($log, $numbers)
{
    echo implode($log, $numbers) . ' = ';

    $count = 0;

    foreach ($numbers as $key => $value) {
        if($log == '+') {

            $count += $value;
        }
        else {
            $count = $value;
        }

    }

    echo $count;



}