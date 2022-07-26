<?php

namespace Faker\Provider\he_IL;

class Company extends \Faker\Provider\Company

{
    protected static $formats = [
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}} את {{lastName}} {{company_idSuffix}}',
        '{{lastName}} ו{{lastName}}',
    ];

    protected static $company_idSuffix = ['בע"מ', 'ובניו', 'סוכנויות', 'משווקים'];
}
