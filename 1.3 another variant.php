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
    $tokens = array(
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'just now'
    );

    foreach ($tokens as $unit => $text) {
        if ($diff < $unit) {
            continue;
        }
        $numberOfUnits = floor($diff / $unit);

        if ($text == 'just now') {
            return $text;
        }

        if ($text == 'day' && $numberOfUnits == 1) {
            return 'yesturday';
        }

        return $numberOfUnits . ' ' . $text . (($numberOfUnits > 1) ? 's' : '');

    }
}

echo countInterval('06-10-2018 12:17') . '<br>';
echo countInterval('05-10-2018 01:27') . '<br>';
echo countInterval('02-10-2018 01:27') . '<br>';
echo countInterval('05-08-2018 01:27') . '<br>';
echo countInterval('05-10-2017 01:27') . '<br>';
echo countInterval('05-10-2008 01:27') . '<br>';



