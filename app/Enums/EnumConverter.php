<?php

namespace App\Enums;

trait EnumConverter
{
    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function array(): array
    {
        return array_combine(self::values(), self::names());
    }

    public static function getConstantByName($dayName)
    {
        return constant('self::'.$dayName);
    }

    public static function getConstantByValue($value)
    {
        $arr = array_combine(self::names(), self::values());

        return array_flip($arr)[$value];

    }


    public static function trans(): array
    {
        $array = [];
        foreach (self::cases() as $case) {
            $array[$case->value] = __("trans.$case->value");
        }
        return $array;
    }

    public static function getRandomValue(): string
    {
        return self::values()[rand(0, count(self::values()) - 1)];
    }

    public static function getValuesImploded()
    {
        return implode(',', self::values());
    }
}
