<?php

require('src/functions.php');

task1(['1 piece','2 piece','3 piece']);
echo task1(['1 piece','2 piece','3 piece'], true);

echo '<br>';
echo task2('/', 12, 1, 1, 1.2);
echo '<br>';
echo task2('+', 12, 1);
echo '<br>';
echo task2('#', 12, 1, 1, 1.2);

echo '<br>';
task3(8, 8);
echo '<br>';
task3("a", 8);
echo '<br>';
task3(3, 5);
echo '<br>';
task3(-2, 0);
echo '<br>';

//task4
echo 'current date: ' . date("d.m.Y H:i") . '<br>';
$date = '24.02.2016 00:00:00';
echo $date . ' unixtime ' . strtotime($date) . '<br>';

//task5
echo str_replace('К', '', 'Карл у Клары украл Кораллы') . '<br>';
echo str_replace('Две', 'Три', 'Две бутылки лимонада') . '<br>';

////task6
$text = "Hello again!";
file_put_contents('test.txt', $text);

task6('test.txt');
echo '<br>';
task6('test123.txt');
