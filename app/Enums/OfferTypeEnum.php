<?php

namespace App\Enums;

use App\Enums\EnumConverter;

enum OfferTypeEnum: string
{
    use EnumConverter;
    case NationalDay = "national_day";
    case Others = "others";

    public static function toArray()
    {
        return array_map(fn ($a) => $a->value, self::cases());
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
