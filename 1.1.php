<?php
/**
 * 1.1. Написать метод,который преобразовывает входящую дату
 * в формате вида '2018-09-17 14:05:59'
 * в дату и время привычные в посденевном использованиии
 */
$time = '2018-09-17 14:05:59';

echo date('H:i d.m.y', strtotime($time));