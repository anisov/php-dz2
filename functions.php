<?php
/**
 * Created by PhpStorm.
 * User: Dmitriy
 * Date: 02.03.2018
 * Time: 21:36
 */
//Задание #1
//1. Функция должна принимать массив строк и выводить каждую строку в
//отдельном параграфе (тег <p>)
//2. Если в функцию передан второй параметр true, то возвращать (через return)
//результат в виде одной объединенной строки.

function task1($mas, $true = null)
{
    $newMas = [];
    foreach ($mas as $i) {
        if ($true) {
            array_push($newMas, "<p>$i</p>");
        } else {
            echo '<p>' . $i . '</p>';
        }
    }
    if ($true) {
        return implode('', $newMas);
    }
}

//Задание #2
//1. Функция должна принимать 2 параметра:
//a. массив чисел;
//b. строку, обозначающую арифметическое действие, которое нужно
//выполнить со всеми элементами массива.
//2. Функция должна вывести результат на экран.
//3. Функция должна обрабатывать любой ввод, в том числе некорректный и
//выдавать сообщения об этом

function task2($masInt, $mathString)
{
    $int = null;
    foreach ($masInt as $i) {
        if (is_numeric($i)) {
            if ($int) {
                if ($mathString == '+') {
                    $int = $i + $int;
                } elseif ($mathString == '*') {
                    $int = $i * $int;
                } elseif ($mathString == '/') {
                    $int = $i / $int;
                } elseif ($mathString == '-') {
                    $int = $i - $int;
                } elseif ($mathString == '%') {
                    $int = $i % $int;
                } elseif ($mathString == '**') {
                    $int = $i ** $int;
                } else {
                    return 'Некорректный ввод арифметического оператора.';
                }
            } else {
                $int = $i;
            }
        } else {
            return 'Некорректный массив, в нём содержаться не только числа.';
        }
    }
    return $int;
}

//$masInt = ['1', '2', '2', '2', '3.3'];
//echo task2($masInt, '%').'<br/>'.PHP_EOL;
//Задание #3
//1. Функция должна принимать переменное число аргументов.
//2. Первым аргументом обязательно должна быть строка, обозначающая
//арифметическое действие, которое необходимо выполнить со всеми
//передаваемыми аргументами.
//3. Остальные аргументы это целые и/или вещественные числа.
//Пример вызова: calcEverything(‘+’, 1, 2, 3, 5.2);
//Результат: 1 + 2 + 3 + 5.2 = 11.2

function task3()
{
    $args = func_get_args();
    $string = array_shift($args);
    return task2($args, $string);

}

function task3_2()
{
    if (func_get_arg(0) == '-' or '+' or '*' or '/') {
        $int = null;
        for ($i = 1; $i < func_num_args(); $i++) {
            if (is_numeric(func_get_arg($i))) {
                if ($int) {
                    if (func_get_arg(0) == '+') {
                        $int = func_get_arg($i) + $int;
                    } elseif (func_get_arg(0) == '*') {
                        $int = func_get_arg($i) * $int;
                    } elseif (func_get_arg(0) == '/') {
                        $int = func_get_arg($i) / $int;
                    } elseif (func_get_arg(0) == '-') {
                        $int = func_get_arg($i) - $int;
                    } elseif (func_get_arg(0) == '%') {
                        $int = func_get_arg($i) % $int;
                    } elseif (func_get_arg(0) == '**') {
                        $int = func_get_arg($i) ** $int;
                    } else {
                        return 'Некорректный ввод арифметического оператора.';
                    }
                } else {
                    $int = func_get_arg($i);
                }
            } else {
                return 'Некорректный массив, в нём содержаться не только числа.';
            }
        }
    } else {
        return 'Некорректный ввод арифметического оператора.';
    }
    return $int;
}

//Задание #4
//1. Функция должна принимать два параметра – целые числа.
//2. Если в функцию передали 2 целых числа, то функция должна отобразить
//таблицу умножения размером со значения параметров, переданных в функцию.
//(Например если передано 8 и 8, то нарисовать от 1х1 до 8х8). Таблица должна
//быть выполнена с использованием тега <table>
//3. В остальных случаях выдавать корректную ошибку.

function task4($rowTable, $columnTable)
{
    echo '<table border="1"  cellpadding="5">' . PHP_EOL;
    if (is_int($rowTable) and is_int($columnTable)) {
        for ($i = 0; $i < $rowTable; $i++) {
            echo '<tr>';
            for ($x = 0; $x < $columnTable; $x++) {
                echo '<td>', ($x + 1) * ($i + 1);
            }
            echo '</tr>' . PHP_EOL;
        }
    } else {
        echo 'Некорректный ввод, введите, пожалуйста, целые числа.';
    }
    echo '</table>' . '<br/>' . PHP_EOL;
    if ($rowTable == 0) {
        return;
    }

    task4(--$rowTable, --$columnTable);
}

function task4_2($rowTable, $columnTable)
{

    if (is_int($rowTable) and is_int($columnTable)) {
        for ($i = 0; $i < $rowTable; $i++) {
            echo '<table border="1" cellpadding="5">' . PHP_EOL;
            echo '<tr>';
            for ($x = 0; $x <= $i; $x++) {
                echo '<td>', ($x + 1) * ($i + 1);
            }
            echo '</tr>' . PHP_EOL;
            echo '</table>' . '<br/>' . PHP_EOL;
        }
    } else {
        echo 'Некорректный ввод, введите, пожалуйста, целые числа.';
    }

}

function task4_3($rowTable, $columnTable)
{
    echo '<table border="1" width="100%" cellpadding="5">' . PHP_EOL;
    if (is_int($rowTable) and is_int($columnTable)) {
        for ($i = 0; $i < $rowTable; $i++) {
            echo '<tr>';
            for ($x = 0; $x < $columnTable; $x++) {
                echo '<td>', ($x + 1) * ($i + 1);
            }
            echo '</tr>' . PHP_EOL;
        }
    } else {
        echo 'Некорректный ввод, введите, пожалуйста, целые числа.';
    }
    echo '</table>' . '<br/>' . PHP_EOL;
}

//Задание #5
//1. Написать две функции.
//2. Функция №1 принимает 1 строковый параметр и возвращает true​, если строка
//является палиндромом*, false​в противном случае. Пробелы и регистр не
//должны учитываться.
//3. Функция №2 выводит сообщение в котором на русском языке оговаривается
//результат из функции №1
//* Палиндром – строка, одинаково читающаяся в обоих направлениях.

function task5($palString)
{
    $palString = str_replace(' ', '', $palString);
    $palString = mb_strtolower($palString);
    $revString = iconv('utf-8', 'utf-16le', $palString);
    $revString = strrev($revString);
    $revString = iconv('utf-16be', 'utf-8', $revString);
    if ($palString == $revString) {
        return true;
    } else {
        return false;
    }
}

function validator($func)
{
    if ($func) {
        echo 'Строка палиндром' . '<br/>' . PHP_EOL;
    } else {
        echo 'Строка не палиндром' . '<br/>' . PHP_EOL;
    }
}

//Задание #6 (выполняется после вебинара “​ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)
//1. Выведите информацию о текущей дате в формате 31.12.2016 23:59
//2. Выведите unixtime время соответствующее 24.02.2016 00:00:00.

$d = getdate();


//Задание #8 (выполняется после вебинара “​ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)
//1. Создайте средствами ОС (в ручную) файл test.txt и поместите в него текст
//“Hello, world”
//2. Напишите функцию, которая будет принимать имя файла, открывать файл и
//выводить содержимое на экран.
function openFile($fileName)
{
    $fp = fopen($fileName, "r");
    if ($fp) {
        while (!feof($fp)) {
            $text = fgets($fp, 999);
            echo $text . "<br/>" . PHP_EOL;
        }
    }
}

//Задание #9 (выполняется после вебинара “​ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)
//1. Создайте файл anothertest.txt средствами PHP. Поместите в него текст - “Hello again!

function createFile($fileName, $text)
{
    $fp = fopen($fileName, "wa");
    $test = fwrite($fp, $text);
    if ($test) echo 'Файл успешно создан и данные занесены' . PHP_EOL;
    else echo 'Ошибка при записи в файл' . PHP_EOL;
    fclose($fp);
}