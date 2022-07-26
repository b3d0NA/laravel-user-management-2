<?php

namespace Faker\Provider\el_CY;

class Company extends \Faker\Provider\Company

{
    protected static $company_idSuffix = [
        'ΛΤΔ',
        'Δημόσια εταιρεία',
        '& Υιοι',
        '& ΣΙΑ',
    ];

    protected static $formats = [
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}}-{{lastName}}',
    ];
}
