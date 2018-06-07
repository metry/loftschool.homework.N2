<?php

function task1(array $arr, bool $hasReturned = false)
{
    if ($hasReturned) {
        return implode('', $arr);
    } else {
        if (!empty($arr)) {
            foreach ($arr as $item) {
                echo '<p>' . $item . '</p>';
            }
        }
        return null;
    }
}

function task2(string $str, ...$numbers)
{
    if ($numbers) {
        $result = 0;
        $error = false;
        switch ($str) {
            case '+':
                foreach ($numbers as $number) {
                    $result += $number;
                }
                break;
            case '-':
                foreach ($numbers as $numberKey => $numberVal) {
                    if ($numberKey == 0) {
                        $result = $numberVal;
                    } else {
                        $result -= $numberVal;
                    }
                }
                break;
            case '*':
                $result = 1;
                foreach ($numbers as $number) {
                    $result *= $number;
                }
                break;
            case '/':
                foreach ($numbers as $numberKey => $numberVal) {
                    if ($numberKey == 0) {
                        $result = $numberVal;
                    } else {
                        $result /= $numberVal;
                    }
                }
                break;
            default:
                $error = true;
        }
        if (!$error) {
            echo implode(' ' . $str . ' ', $numbers) . ' = ' . $result;
        } else {
            echo 'Оператор не распознан';
        }
    } else {
        return null;
    }
}

function task3($a, $b)
{
    if (is_int($a) && is_int($b) && $a > 0 && $b > 0) {
        echo '<table border="1">';
        for ($i = 1; $i <= $a; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= $b; $j++) {
                echo '<td style="padding:20px;">' . $i*$j . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'Аргументы должны представлять собой целые положительные числа';
    }
}
