<?php

namespace Faker\Provider\sl_SI;

class Company extends \Faker\Provider\Company

{
    protected static $formats = [
        '{{firstName}} {{lastName}} s.p.',
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}}, {{lastName}} in {{lastName}} {{company_idSuffix}}',
    ];

    protected static $company_idSuffix = ['d.o.o.', 'd.d.', 'k.d.', 'k.d.d.', 'd.n.o.', 'so.p.'];
}
