<?php

namespace App\Enums;

enum FormationsEnum: string
{
    const STATUS = 'التكوين المنصوص عليه في القوانين الأساسية';
    const PERFECTIONNEMENT = 'تحسين المستوى';



     
    public static function getValues(): array
    {
        return [
            self::STATUS,
            self::PERFECTIONNEMENT,
        ];
    }
  
}
