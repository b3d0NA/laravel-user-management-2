<?php

namespace Faker\Provider\lt_LT;

class Company extends \Faker\Provider\Company

{
    protected static $formats = [
        '{{company_idSuffix}} {{lastNameMale}}',
        '{{company_idSuffix}} {{lastNameMale}} ir {{lastNameMale}}',
        '{{company_idSuffix}} "{{lastNameMale}} ir {{lastNameMale}}"',
        '{{company_idSuffix}} "{{lastNameMale}}"',
    ];

    protected static $company_idSuffix = ['UAB', 'AB', 'IĮ', 'MB', 'VŠĮ'];
}
