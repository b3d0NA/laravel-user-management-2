<?php

namespace Faker\Provider\sv_SE;

class Company extends \Faker\Provider\Company

{
    protected static $formats = [
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}} {{company_idSuffix}}',
        '{{lastName}} {{company_idSuffix}}',
        '{{firstName}} {{lastName}} {{company_idSuffix}}',
        '{{lastName}} & {{lastName}} {{company_idSuffix}}',
        '{{lastName}} & {{lastName}}',
        '{{lastName}} och {{lastName}}',
        '{{lastName}} och {{lastName}} {{company_idSuffix}}',
    ];

    protected static $company_idSuffix = ['AB', 'HB'];

    protected static $jobTitles = ['Automationsingenjör', 'Bagare', 'Digital Designer', 'Ekonom', 'Ekonomichef', 'Elektronikingenjör', 'Försäljare', 'Försäljningschef', 'Innovationsdirektör', 'Investeringsdirektör', 'Journalist', 'Kock', 'Kulturstrateg', 'Läkare', 'Lokförare', 'Mäklare', 'Programmerare', 'Projektledare', 'Sjuksköterska', 'Utvecklare', 'UX Designer', 'Webbutvecklare'];

    public function jobTitle()
    {
        return static::randomElement(static::$jobTitles);
    }
}
