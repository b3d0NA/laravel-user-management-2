<?php

namespace Faker\Provider\da_DK;

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
    protected static $company_idSuffix = ['ApS', 'A/S', 'I/S', 'K/S'];

    /**
     * @see http://cvr.dk/Site/Forms/CMS/DisplayPage.aspx?pageid=60
     *
     * @var string CVR number format.
     */
    protected static $cvrFormat = '%#######';

    /**
     * @see http://cvr.dk/Site/Forms/CMS/DisplayPage.aspx?pageid=60
     *
     * @var string P number (production number) format.
     */
    protected static $pFormat = '%#########';

    /**
     * Generates a CVR number (8 digits).
     *
     * @return string
     */
    public static function cvr()
    {
        return static::numerify(static::$cvrFormat);
    }

    /**
     * Generates a P entity number (10 digits).
     *
     * @return string
     */
    public static function p()
    {
        return static::numerify(static::$pFormat);
    }
}
