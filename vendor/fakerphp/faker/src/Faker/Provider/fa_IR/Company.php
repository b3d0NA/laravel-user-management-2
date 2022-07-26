<?php

namespace Faker\Provider\fa_IR;

class Company extends \Faker\Provider\Company

{
    protected static $formats = [
        '{{company_idPrefix}} {{company_idField}} {{firstName}}',
        '{{company_idPrefix}} {{company_idField}} {{firstName}}',
        '{{company_idPrefix}} {{company_idField}} {{firstName}}',
        '{{company_idPrefix}} {{company_idField}} {{firstName}}',
        '{{company_idPrefix}} {{company_idField}} {{lastName}}',
        '{{company_idField}} {{firstName}}',
        '{{company_idField}} {{firstName}}',
        '{{company_idField}} {{lastName}}',
    ];

    protected static $company_idPrefix = [
        'شرکت', 'موسسه', 'سازمان', 'بنیاد',
    ];

    protected static $company_idField = [
        'فناوری اطلاعات', 'راه و ساختمان', 'توسعه معادن', 'استخراج و اکتشاف',
        'سرمایه گذاری', 'نساجی', 'کاریابی', 'تجهیزات اداری', 'تولیدی', 'فولاد',
    ];

    protected static $contract = [
        'رسمی', 'پیمانی', 'تمام وقت', 'پاره وقت', 'پروژه ای', 'ساعتی',
    ];

    /**
     * @example 'شرکت'
     *
     * @return string
     */
    public static function company_idPrefix()
    {
        return static::randomElement(static::$company_idPrefix);
    }

    /**
     * @example 'سرمایه گذاری'
     *
     * @return string
     */
    public static function company_idField()
    {
        return static::randomElement(static::$company_idField);
    }

    /**
     * @example 'تمام وقت'
     *
     * @return string
     */
    public function contract()
    {
        return static::randomElement(static::$contract);
    }
}
