<?php
/**
 * 1.2. Написать скрипт, который выводит сколько времени прошло с вашего дня Рождения.
 * А именнно
 * 25 лет
 * 305 месяцев
 * ...
 * nnnnnnnnn секунд
 *
 */

function countInterval(int $year, int $month, int $day)
{
    $start = new DateTime;
    $start->setDate($year, $month, $day)->setTime(0, 0, 0);
    $now = new DateTime();

    $interval = $start->diff($now);

    echo $interval->y . ' years <br>';
    echo $interval->y * 12 + $interval->m . ' month <br>';
    echo $interval->days . ' days <br>';
    echo $interval->days * 24 + $interval->h . ' hours <br>';
    echo $interval->days * 24 * 60 + $interval->h * 60 + $interval->i . ' minutes <br>';
    echo $interval->days * 24 * 60 * 60 + $interval->h * 60 * 60 + $interval->i * 60 + $interval->s . ' seconds <br>';


}

countInterval(1992, 04, 10);