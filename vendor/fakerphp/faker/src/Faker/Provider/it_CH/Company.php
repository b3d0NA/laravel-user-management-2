<?php

namespace Faker\Provider\it_CH;

class Company extends \Faker\Provider\Company

{
    protected static $formats = [
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}} {{lastName}} {{company_idSuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    ];

    protected static $company_idSuffix = ['SA', 'Sarl'];
}
