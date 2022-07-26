<?php

namespace Faker\Provider\nl_BE;

class Company extends \Faker\Provider\Company

{
    protected static $formats = [
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}}',
    ];

    protected static $company_idSuffix = ['VZW', 'Comm.V', 'VOF', 'BVBA', 'EBVBA', 'ESV', 'NV', 'Comm.VA', 'CVOA', 'CVBA', '& Zonen', '& Zn'];
}
