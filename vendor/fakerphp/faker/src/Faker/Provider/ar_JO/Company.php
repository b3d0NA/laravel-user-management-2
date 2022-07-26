<?php

namespace Faker\Provider\ar_JO;

class Company extends \Faker\Provider\Company

{
    protected static $formats = [
        '{{lastName}} {{company_idSuffix}}',
        '{{company_idPrefix}} {{lastName}} {{company_idSuffix}}',
        '{{company_idPrefix}} {{lastName}}',
    ];

    protected static $bsWords = [
        [],
    ];

    protected static $catchPhraseWords = [
        ['الخدمات', 'الحلول', 'الانظمة'],
        [
            'الذهبية', 'الذكية', 'المتطورة', 'المتقدمة', 'الدولية', 'المتخصصه', 'السريعة',
            'المثلى', 'الابداعية', 'المتكاملة', 'المتغيرة', 'المثالية',
        ],
    ];

    protected static $company_idPrefix = ['شركة', 'مؤسسة', 'مجموعة', 'مكتب', 'أكاديمية', 'معرض'];

    protected static $company_idSuffix = ['وأولاده', 'للمساهمة المحدودة', ' ذ.م.م', 'مساهمة عامة', 'وشركائه'];

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
     * @example 'Robust full-range hub'
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
     * @example 'integrate extensible convergence'
     */
    public function bs()
    {
        $result = [];

        foreach (static::$bsWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return implode(' ', $result);
    }
}
