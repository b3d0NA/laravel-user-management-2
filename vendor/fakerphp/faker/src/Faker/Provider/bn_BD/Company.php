<?php

namespace Faker\Provider\bn_BD;

class Company extends \Faker\Provider\Company

{
    protected static $formats = [
        '{{company_idName}} {{company_idType}}',
    ];

    protected static $names = [
        'রহিম', 'করিম', 'বাবলু',
    ];

    protected static $types = [
        'সিমেন্ট', 'সার', 'ঢেউটিন',
    ];

    public static function company_idType()
    {
        return static::randomElement(static::$types);
    }

    public static function company_idName()
    {
        return static::randomElement(static::$names);
    }
}
