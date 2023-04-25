<?php

namespace App\Services;

class Number
{
    public static function getNumbers()
    {
        $numbers = [];

        while (count($numbers) < 6) {
            $number = rand(1, 60);

            if (!in_array($number, $numbers)) {
                $numbers[] = $number;
            }
        }

        return $numbers;
    }
}
