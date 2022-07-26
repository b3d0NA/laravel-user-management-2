<?php

namespace Faker\Provider\fr_BE;

class Company extends \Faker\Provider\fr_FR\Company

{
    protected static $formats = [
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}}',
    ];

    protected static $company_idSuffix = ['ASBL', 'SCS', 'SNC', 'SPRL', 'Associations', 'Entreprise individuelle', 'GEIE', 'GIE', 'SA', 'SCA', 'SCRI', 'SCRL'];
}
