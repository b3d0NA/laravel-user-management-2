<?php

namespace Faker\Provider\ko_KR;

class Company extends \Faker\Provider\Company

{
    protected static $formats = [
        '{{company_idPrefix}}{{firstName}}',
        '{{company_idPrefix}}{{firstName}}{{company_idSuffix}}',
        '{{firstName}}{{company_idSuffix}}',
        '{{firstName}}{{company_idSuffix}}',
        '{{firstName}}{{company_idSuffix}}',
        '{{firstName}}{{company_idSuffix}}',
    ];

    protected static $company_idPrefix = ['(주)', '(주)', '(주)', '(유)'];

    protected static $company_idSuffix = [
        '전자', '건설', '식품', '인터넷', '그룹', '은행', '보험', '제약', '금융', '네트웍스', '기획', '미디어', '연구소', '모바일', '스튜디오', '캐피탈',
    ];

    public static function company_idPrefix()
    {
        return static::randomElement(static::$company_idPrefix);
    }

    public static function company_idSuffix()
    {
        return static::randomElement(static::$company_idSuffix);
    }
}
