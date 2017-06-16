<?php

class Calculator
{
    const MAX_NUMBER = 1000;

    public static function add($calculation)
    {
        $values = preg_split('/,|\\\n/', $calculation);

        return array_reduce($values, function ($total, $value) {
            if ($value < 0) {
                throw new InvalidArgumentException("Invalid number provided: $value");
            }
            if ($value >= static::MAX_NUMBER) {
                return $total;
            }
            return $total + $value;
        }, 0);
    }
}
