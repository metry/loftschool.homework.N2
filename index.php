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
task3(8,8);
echo '<br>';
task3("a",8);
echo '<br>';
task3(3,5);
echo '<br>';
task3(-2,0);