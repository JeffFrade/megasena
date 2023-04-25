<?php

namespace App\Services;

class Table
{
    public static function mountTable(array $numbers)
    {
        $table = '<table>';

        for ($i = 0; $i <= 5; $i++) {
            $table .= '<tr>';

            for ($j = 1; $j <= 10; $j++) {
                $table .= self::mountData($numbers, $i, $j);
            }

            $table .= '</tr>';
        }

        $table .= '</table>';

        return $table;
    }

    private static function mountData(array $number, int $i, int $j)
    {
        $value = $i * 10 + $j;
        return sprintf('<td %s>%s</td>', (in_array($value, $number)?'class="blue"':''), $value);
    }
}
