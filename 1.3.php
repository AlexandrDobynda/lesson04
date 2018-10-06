<?php
/**
 * 1.3. Написать метод, который на вход получает конкретное время а на выхое выдает строку
 * только что
 * или n минут назад
 * или n часов назад
 * или вчера
 * или n дней назад
 * или n месяцев назад
 * или n лет назад
 */


function countInterval(string $time)
{
    $date = strtotime($time);
    $now = time();
    $diff = $now - $date;

    if ($diff < 60) {
        echo 'just now' . '<br>';
    }
    if ($diff > 60 && $diff < 60 * 60) {
        echo floor($diff / 60) . 'minutes ago' . '<br>';
    }
    if ($diff > 60 * 60 && $diff < 60 * 60 * 24) {
        echo floor($diff / (60 * 60)) . 'hourse ago' . '<br>';
    }
    if ($diff > 60 * 60 * 24 && $diff < 60 * 60 * 24 * 2) {
        echo 'yesterday' . '<br>';
    }
    if ($diff > 60 * 60 * 24 * 2 && $diff < 60 * 60 * 24 * 30) {
        echo floor($diff / (60 * 60 * 24)) . 'days ago' . '<br>';
    }
    if ($diff > 60 * 60 * 24 * 30 && $diff < 60 * 60 * 24 * 30 * 12) {
        echo floor($diff / (60 * 60 * 24 * 30)) . 'months ago' . '<br>';
    }
    if ($diff > 60 * 60 * 24 * 30 * 12) {
        echo floor($diff / (60 * 60 * 24 * 30 * 12)) . 'years ago' . '<br>';
    }

}

countInterval('06-10-2018 9:55');
countInterval('05-10-2018 01:27');
countInterval('03-10-2018 01:27');
countInterval('05-09-2018 01:27');
countInterval('05-10-2017 01:27');
countInterval('05-10-2008 01:27');



