<?php

namespace Faker\Provider\hy_AM;

class Company extends \Faker\Provider\Company

{
    protected static $formats = [
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}} եղբայրներ',
    ];

    protected static $catchPhraseWords = [

    ];

    protected static $bsWords = [

    ];

    protected static $company_idSuffix = ['ՍՊԸ', 'և որդիներ', 'ՓԲԸ', 'ԲԲԸ'];

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
