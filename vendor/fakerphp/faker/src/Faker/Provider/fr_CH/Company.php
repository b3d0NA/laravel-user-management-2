<?php

namespace Faker\Provider\fr_CH;

class Company extends \Faker\Provider\fr_FR\Company

{
    protected static $formats = [
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}} {{lastName}} {{company_idSuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    ];

    protected static $company_idSuffix = ['AG', 'Sàrl', 'SA', 'GmbH'];
}
