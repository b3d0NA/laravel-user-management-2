<?php

namespace Faker\Provider\ka_GE;

class Company extends \Faker\Provider\Company

{
    protected static $company_idPrefixes = [
        'შპს', 'შპს', 'შპს', 'სს', 'სს', 'სს', 'კს', 'სს კორპორაცია', 'იმ', 'სპს', 'კოოპერატივი',
    ];

    protected static $company_idNameSuffixes = [
        'საბჭო', 'ექსპედიცია', 'პრომი', 'კომპლექსი', 'ავტო', 'ლიზინგი', 'თრასთი', 'ეიდი', 'პლუსი',
        'ლაბი', 'კავშირი', ' და კომპანია',
    ];

    protected static $company_idElements = [
        'ცემ', 'გეო', 'ქარ', 'ქიმ', 'ლიფტ', 'ტელე', 'რადიო', 'ტრანს', 'ალმას', 'მეტრო',
        'მოტორ', 'ტექ', 'სანტექ', 'ელექტრო', 'რეაქტო', 'ტექსტილ', 'კაბელ', 'მავალ', 'ტელ',
        'ტექნო',
    ];

    protected static $company_idNameFormats = [
        '{{company_idPrefix}} {{company_idNameElement}}{{company_idNameSuffix}}',
        '{{company_idPrefix}} {{company_idNameElement}}{{company_idNameElement}}{{company_idNameSuffix}}',
        '{{company_idPrefix}} {{company_idNameElement}}{{company_idNameElement}}{{company_idNameElement}}{{company_idNameSuffix}}',
        '{{company_idPrefix}} {{company_idNameElement}}{{company_idNameElement}}{{company_idNameElement}}{{company_idNameSuffix}}',
    ];

    /**
     * @example 'იმ ელექტროალმასგეოსაბჭო'
     */
    public function company_id()
    {
        $format = static::randomElement(static::$company_idNameFormats);

        return $this->generator->parse($format);
    }

    public static function company_idPrefix()
    {
        return static::randomElement(static::$company_idPrefixes);
    }

    public static function company_idNameElement()
    {
        return static::randomElement(static::$company_idElements);
    }

    public static function company_idNameSuffix()
    {
        return static::randomElement(static::$company_idNameSuffixes);
    }
}
