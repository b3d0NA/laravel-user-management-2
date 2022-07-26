<?php

namespace Faker\Provider\kk_KZ;

class Company extends \Faker\Provider\Company

{
    protected static $company_idNameFormats = [
        '{{company_idPrefix}} {{company_idNameElement}}',
        '{{company_idPrefix}} {{company_idNameElement}}{{company_idNameElement}}',
        '{{company_idPrefix}} {{company_idNameElement}}{{company_idNameElement}}{{company_idNameElement}}',
        '{{company_idPrefix}} {{company_idNameElement}}{{company_idNameElement}}{{company_idNameElement}}{{company_idNameSuffix}}',
    ];

    protected static $company_idPrefixes = [
        'АҚ', 'ЖШС', 'ЖАҚ',
    ];

    protected static $company_idNameSuffixes = [
        'Құрылыс', 'Машина', 'Бұзу', '-М', 'Лизинг', 'Страх', 'Ком', 'Телеком',
    ];

    protected static $company_idElements = [
        'Қазақ', 'Кітап', 'Цемент', 'Лифт', 'Креп', 'Авто', 'Теле', 'Транс', 'Алмаз', 'Метиз',
        'Мотор', 'Қаз', 'Тех', 'Сантех', 'Алматы', 'Астана', 'Электро',
    ];

    /**
     * @example 'ЖШС АлматыТелеком'
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

    /**
     * National Business Identification Numbers
     *
     * @see   http://egov.kz/wps/portal/Content?contentPath=%2Fegovcontent%2Fbus_business%2Ffor_businessmen%2Farticle%2Fbusiness_identification_number&lang=en
     *
     * @param \DateTime $registrationDate
     *
     * @return string 12 digits, like 150140000019
     */
    public static function businessIdentificationNumber(\DateTime$registrationDate = null)
    {
        if (!$registrationDate) {
            $registrationDate = \Faker\Provider\DateTime::dateTimeThisYear();
        }

        $dateAsString = $registrationDate->format('ym');
        $legalEntityType = (string) self::numberBetween(4, 6);
        $legalEntityAdditionalType = (string) self::numberBetween(0, 3);
        $randomDigits = (string) static::numerify('######');

        return $dateAsString . $legalEntityType . $legalEntityAdditionalType . $randomDigits;
    }
}
