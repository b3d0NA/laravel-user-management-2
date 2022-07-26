<?php

namespace Faker\Provider\is_IS;

class Company extends \Faker\Provider\Company

{
    /**
     * @var array Danish company_id name formats.
     */
    protected static $formats = [
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}} {{company_idSuffix}}',
        '{{firstname}} {{lastName}} {{company_idSuffix}}',
        '{{middleName}} {{company_idSuffix}}',
        '{{middleName}} {{company_idSuffix}}',
        '{{middleName}} {{company_idSuffix}}',
        '{{firstname}} {{middleName}} {{company_idSuffix}}',
        '{{lastName}} & {{lastName}} {{company_idSuffix}}',
        '{{lastName}} og {{lastName}} {{company_idSuffix}}',
        '{{lastName}} & {{lastName}} {{company_idSuffix}}',
        '{{lastName}} og {{lastName}} {{company_idSuffix}}',
        '{{middleName}} & {{middleName}} {{company_idSuffix}}',
        '{{middleName}} og {{middleName}} {{company_idSuffix}}',
        '{{middleName}} & {{lastName}}',
        '{{middleName}} og {{lastName}}',
    ];

    /**
     * @var array Company suffixes.
     */
    protected static $company_idSuffix = ['ehf.', 'hf.', 'sf.'];

    /**
     * @see http://www.rsk.is/atvinnurekstur/virdisaukaskattur/
     *
     * @var string VSK number format.
     */
    protected static $vskFormat = '%####';

    /**
     * Generates a VSK number (5 digits).
     *
     * @return string
     */
    public static function vsk()
    {
        return static::numerify(static::$vskFormat);
    }
}
