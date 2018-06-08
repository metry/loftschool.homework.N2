<?php

function task1(array $arr, bool $hasReturned = false)
{
    foreach ($arr as $item) {
        echo '<p>' . $item . '</p>';
    }
    if ($hasReturned) {
        return implode('', $arr);
    }
    return null;
}

function task2(string $str, ...$numbers)
{
    $firstItem = $result = $numbers[0];
    unset($numbers[0]);
    switch ($str) {
        case '+':
            foreach ($numbers as $number) {
                $result += $number;
            }
            break;
        case '-':
            foreach ($numbers as $number) {
                $result -= $number;
            }
            break;
        case '*':
            foreach ($numbers as $number) {
                $result *= $number;
            }
            break;
        case '/':
            foreach ($numbers as $number) {
                $result /= $number;
            }
            break;
        default:
            echo 'Оператор не распознан';
            return null;
    }
    echo $firstItem . ' ' . $str . ' ' . implode(' ' . $str . ' ', $numbers) . ' = ' . $result;
}

function task3($row, $col)
{
    if ($row < 1 || $col < 1) {
        echo 'Аргументы должны представлять собой целые положительные числа';
        return null;
    }
    echo '<table border="1">';
    for ($i = 1; $i <= $row; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= $col; $j++) {
            echo '<td style="padding:20px;">' . $i * $j . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    task3(--$row, --$col);
}

function task6(string $filename)
{
    if (!file_exists($filename)) {
        echo 'Файл не найден';
        return null;
    }
    echo file_get_contents($filename);
}
