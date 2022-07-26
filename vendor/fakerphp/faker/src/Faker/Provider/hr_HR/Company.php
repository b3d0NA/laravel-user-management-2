<?php

namespace Faker\Provider\hr_HR;

class Company extends \Faker\Provider\Company

{
    protected static $formats = [
        '{{lastName}} {{company_idSuffix}}',
        '{{company_idPrefix}} {{lastName}}',
        '{{company_idPrefix}} {{firstName}}',
    ];

    protected static $company_idSuffix = [
        'd.o.o.', 'j.d.o.o.', 'Security',
    ];

    protected static $company_idPrefix = [
        'Autoškola', 'Cvjećarnica', 'Informatički obrt', 'Kamenorezački obrt', 'Kladionice', 'Market', 'Mesnica', 'Prijevoznički obrt', 'Suvenirnica', 'Turistička agencija', 'Voćarna',
    ];

    public static function company_idPrefix()
    {
        return static::randomElement(static::$company_idPrefix);
    }
}
