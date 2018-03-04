<?php
require('functions.php');

//Первое задание
$mas = ['Просто', 'строка', 'c', 'текстом', '1', '2', '3'];
echo task1($mas, true) . '<br/>' . PHP_EOL;
task1($mas);

//Второе задание
$masInt = ['1', '2', '2', '2', '3.3'];
echo task2($masInt, '%') . '<br/>' . PHP_EOL;

//Третье задание
echo task3('+', 1, 2, 3, 5.2) . '<br/>' . PHP_EOL;
echo task3_2('+', 1, 2, 3, 5.2) . '<br/>' . PHP_EOL;

//Четвёртое задание
task4(9, 9);
task4_2(9, 9);
task4_3(9, 9);

//Пятое задание
validator(task5('Солов зов, воз волос'));

//Шестое задание
echo "$d[mday].$d[mon].$d[year] $d[hours]:$d[minutes]" . '<br/>' . PHP_EOL;
echo date('j.n.Y H:i') . '<br/>' . PHP_EOL;
$unixTime = mktime(24, 02, 2016, 00, 00, 00);
echo $unixTime . PHP_EOL;
echo date('j.n.Y H:i', 1456272000) . '<br/>' . PHP_EOL;

//Задание #7 (выполняется после вебинара “​ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)
//1. Дана строка: “Карл у Клары украл Кораллы”. удалить из этой строки все
//заглавные буквы “К”.
//2. Дана строка “Две бутылки лимонада”. Заменить “Две”, на “Три”. По желанию
//дополнить задание.

$karlText = "Карл у Клары украл Кораллы";
$newStr = preg_replace('/К/', '', $karlText);
echo $newStr . '<br/>' . PHP_EOL;
$bottleText = 'Две бутылки лимонада';
$newBottleStr = preg_replace('/Две/', 'Три', $bottleText);
echo $newBottleStr . '<br/>' . PHP_EOL;

//Восьмое задание
openFile('test.txt');

//Девятое задание
createFile('test1.txt', 'Hello my madness world');

