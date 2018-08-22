<?php


//task 1

function task1($stock, $bool)
{
    if ($bool == false) { // создаем условие, если булевый параметр false
        foreach ($stock as $key => $value) {
            echo '<p>' . $value . '<p>'; // каждый параметр масива оборачиваем в тег p
        }
    } else {
        return implode(',', $stock); // если true возвращаем строку
    }


}

echo task1(['a1','a2','a3'], false);

echo 'br';

//task 2

function task2($log) // Добавляем для первого аргумента переменную
{
    $arr = func_get_args(); // Создаем массив из аргументов

    unset($arr[0]); // Удаляем первый символ из массива

    echo implode($log, $arr) . ' = '; // Делаем массив строкой

    $score = 0; // Создаем переменную в которой будем сохранять все вычисления
    foreach ($arr as $key => $value) {
        if ($key > 1) { // Условие, по которому опериции с первым символом не проводим
            switch ($log) {
                case '-':
                    $score -= $value;
                    break;
                case '+':
                    $score += $value;
                    break;
                case '*':
                    $score *= $value;
                    break;
                case '/':
                    $score /= $value;
                    break;
            }
        } else {
            $score = $value;
        }
    }
    echo $score;
}

echo task2('+', 25, 2, 10, 5.4);

echo '<br><br>';


//task 3

function task3($i, $j)
{

    if ((gettype($i) == 'integer') && (gettype($j) == 'integer')) { // проверяем на целые числа
        $table = ''; // создаем переменную в которую поместим всю таблицу
        $table .= '<table border="1">';
        $table .= '<tr>';
        $table .= '<td></td>';
        for ($k = 1; $k <= $i; $k++) { // для ограничения цикла, сравниваем с первым аргументом
            $table .= '<td>' . $k . '</td>';
        }
        $table .= '</tr>';

        for ($r = 1; $r <= $j; $r++) { // для ограничения цикла, сравниваем со вторым аргументом
            $table .= '<tr>';
            $table .= '<td>' . $r . '</td>';
            for ($l = 1; $l <= $j; $l++) {
                $table .= '<td>' . ($r * $l) . '</td>';
            }

            $table .= '</tr>';
        }

        echo $table;
    } else {
        echo 'Введены не целые числа';
    }
}

task3(8, 8);


echo '<br><br>';


//task 4

echo date('d.m.Y H.i');
echo '<br><br>';
$myDate = mktime(0, 0, 0, 2, 24, 2016);

echo date('d.m.Y H:i:s', $myDate);

echo '<br><br>';

//task 5

$string1 = 'Карл у Клары украл Кораллы';
$string2 = 'Две бутылки лимонада';

echo str_replace('К', '', $string1); // находим К и меняем на ничто

echo '<br><br>';

echo str_replace('Две', 'Три', $string2);  // находим Две и меняем Три

echo '<br><br>';


//task 6

$createFile = "Hello again!";

file_put_contents('test.txt', $createFile); // создаем файл

echo file_get_contents('test.txt'); // выводим на экран
