<?php
function library($arr)
{
    foreach ($arr as $key => $value) {
        empty($value) ? $value = "-" : $value = $value;
        echo "$key: $value\n";
    }
}

library([
    "Назва" => "Кайдашева сім'я",
    "Ім'я автора" => "Іван",
    "Прізвище автора" => "Нечуй-Левицький",
    "Рік видавництва" => 1879,
    "Видавництво" => ""
]);
