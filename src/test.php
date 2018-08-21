<?php

function calcEverything($log, $numbers) //создаем 2 аргумента
{
    echo implode($log, $numbers) . ' = '; //переводим 2 аргумента в масив и выводим его через echo (1 + 2 + 3 + 5.2)

    $count = 0; //создаем числовую переменную

    foreach ($numbers as $key => $value) {
        if ($log == '+') { //ставим условие, определяющее символ, для произведения операции внутри цикла
            $count += $value; //добавляем в переменную $count значение из массива, с измененем согласно оператора
        } else {
            $count = $value;
        }
    }

    echo $count;



}

echo calcEverything('+', 1, 2, 3, 5.2);
