<?php

namespace Faker\Provider;

class Company extends Base
{
    protected static $formats = [
        '{{lastName}} {{company_idSuffix}}',
    ];

    protected static $company_idSuffix = ['Ltd'];

    protected static $jobTitleFormat = [
        '{{word}}',
    ];

    /**
     * @example 'Acme Ltd'
     *
     * @return string
     */
    public function company_id()
    {
        $format = static::randomElement(static::$formats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'Ltd'
     *
     * @return string
     */
    public static function company_idSuffix()
    {
        return static::randomElement(static::$company_idSuffix);
    }

    /**
     * @example 'Job'
     *
     * @return string
     */
    public function jobTitle()
    {
        $format = static::randomElement(static::$jobTitleFormat);

        return $this->generator->parse($format);
    }
}
