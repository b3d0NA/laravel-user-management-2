<?php

namespace Faker\Provider\de_AT;

class Company extends \Faker\Provider\Company

{
    protected static $formats = [
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}}',
    ];

    protected static $company_idSuffix = ['AG', 'EWIV', 'Ges.m.b.H.', 'GmbH', 'KEG', 'KG', 'OEG', 'OG', 'OHG', 'SE'];
}
