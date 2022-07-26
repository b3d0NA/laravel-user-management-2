<?php

namespace Faker\Provider\ja_JP;

class Company extends \Faker\Provider\Company

{
    protected static $formats = [
        '{{company_idPrefix}} {{lastName}}',
    ];

    protected static $company_idPrefix = ['株式会社', '有限会社'];

    public static function company_idPrefix()
    {
        return static::randomElement(static::$company_idPrefix);
    }
}
