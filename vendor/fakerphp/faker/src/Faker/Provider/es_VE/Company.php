<?php

namespace Faker\Provider\es_VE;

class Company extends \Faker\Provider\Company

{
    protected static $formats = [
        '{{company_idPrefix}} {{lastName}} {{company_idSuffix}}',
        '{{company_idPrefix}} {{lastName}}',
        '{{company_idPrefix}} {{lastName}} y {{lastName}}',
        '{{lastName}} y {{lastName}} {{company_idSuffix}}',
        '{{lastName}} de {{lastName}} {{company_idSuffix}}',
        '{{lastName}} y {{lastName}}',
        '{{lastName}} de {{lastName}}',
    ];

    protected static $company_idPrefix = [
        'Asociación', 'Centro', 'Corporación', 'Cooperativa', 'Empresa', 'Gestora', 'Global', 'Grupo', 'Viajes',
        'Inversiones', 'Lic.', 'Dr.',
    ];
    protected static $company_idSuffix = ['S.R.L.', 'C.A.', 'S.A.', 'R.L.', 'etc'];

    /**
     * @example 'Grupo'
     */
    public static function company_idPrefix()
    {
        return static::randomElement(static::$company_idPrefix);
    }

    /**
     * Generate random Taxpayer Identification Number (RIF in Venezuela). Ex J-123456789-1
     *
     * @param string $separator
     *
     * @return string
     */
    public function taxpayerIdentificationNumber($separator = '')
    {
        return static::randomElement(['J', 'G', 'V', 'E', 'P', 'C']) . $separator . static::numerify('########') . $separator . static::numerify('#');
    }
}
