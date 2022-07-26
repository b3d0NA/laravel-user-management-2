<?php

namespace Faker\Provider\ar_EG;

use Faker\Calculator\Luhn;

class Company extends \Faker\Provider\Company

{
    protected static $formats = [
        '{{company_idPrefix}} {{cityName}}',
        '{{company_idPrefix}} {{lastName}}',
        '{{cityName}} {{company_idSuffix}}',
        '{{lastName}} {{company_idSuffix}}',
        '{{company_idPrefix}} {{lastName}} {{company_idSuffix}}',
        '{{company_idPrefix}} {{cityName}} {{company_idSuffix}}',
    ];

    protected static $catchPhraseWords = [
        ['الخدمات', 'الحلول', 'الانظمة'],
        [
            'الذهبية', 'الذكية', 'المتطورة', 'المتقدمة', 'الدولية', 'المتخصصه', 'السريعة',
            'المثلى', 'الابداعية', 'المتكاملة', 'المتغيرة', 'المثالية',
        ],
    ];

    protected static $company_idPrefix = ['شركة', 'مؤسسة', 'مجموعة', 'مكتب', 'أكاديمية', 'معرض'];

    protected static $company_idSuffix = [
        ' ش.م.م',
        ' للتجاره العامه',
        'للأجهزة الطبيه',
        'للتوريدات',
        'للمقاولات',
        'للتطوير العقاري',
        'للدعايه و الاعلان',
        'للحلول المتقدمه',
        'للخدمات الدولية',
        'الدولية',
        'للانظمة المتكاملة',
    ];

    /**
     * @example 'مؤسسة'
     *
     * @return string
     */
    public function company_idPrefix()
    {
        return static::randomElement(self::$company_idPrefix);
    }

    /**
     * @example 'الحلول المتقدمة'
     */
    public function catchPhrase()
    {
        $result = [];

        foreach (static::$catchPhraseWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return implode(' ', $result);
    }

    /**
     * example 010101010
     */
    public static function company_idTaxIdNumber()
    {
        $partialValue = static::numerify(str_repeat('#', 9));

        return Luhn::generateLuhnNumber($partialValue);
    }

    /**
     * example 010101
     */
    public static function company_idTradeRegisterNumber()
    {
        $partialValue = static::numerify(str_repeat('#', 6));

        return Luhn::generateLuhnNumber($partialValue);
    }
}
