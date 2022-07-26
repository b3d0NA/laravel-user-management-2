<?php

namespace Faker\Provider\de_CH;

class Company extends \Faker\Provider\Company

{
    protected static $formats = [
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}} {{lastName}} {{company_idSuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    ];

    protected static $company_idSuffix = ['AG', 'GmbH'];
}
