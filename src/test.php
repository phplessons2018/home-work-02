<?php

function calcEverything($log, $numbers) //создаем 2 аргумента
{
    $numbers = explode($log, $numbers); //переводим 2 аргумента в масив

    echo implode($log, $numbers) . ' = '; // выводим переменную в виде строки


    $score = 0; //создаем числовую переменную

    foreach ($numbers as $key => $value) {
        if ($log == '+') { //ставим условие, определяющее символ, для произведения операции внутри цикла
            $score += $value; //добавляем в переменную $count значение из массива, с измененем согласно оператора
        } else {
            $count = $value;
        }
    }

    echo $score;



}

echo calcEverything('+', 1, 2, 3, 5.2);
