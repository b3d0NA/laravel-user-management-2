<?php

namespace Faker\Provider\pt_PT;

class Company extends \Faker\Provider\Company

{
    protected static $formats = [
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}} {{lastName}}',
        '{{lastName}} e {{lastName}}',
        '{{lastName}} {{lastName}} {{company_idSuffix}}',
        'Grupo {{lastName}} {{company_idSuffix}}',
    ];

    protected static $company_idSuffix = ['e Filhos', 'e Associados', 'Lda.', 'S.A.'];
}
