<?php

namespace Faker\Extension;

/**
 * @experimental This interface is experimental and does not fall under our BC promise
 */
interface CompanyExtension extends Extension
{
    /**
     * @example 'Acme Ltd'
     */
    public function company_id(): string;

    /**
     * @example 'Ltd'
     */
    public function company_idSuffix(): string;

    public function jobTitle(): string;
}
