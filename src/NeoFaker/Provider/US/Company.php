<?php

namespace NeoFaker\Provider\US;

use NeoFaker\Provider\Contract\Company as CompanyContract;

class Company extends Base implements CompanyContract
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
    );

    protected static $companySuffix = array('Ltd');

    protected static $jobTitleFormat = array(
        '{{word}}',
    );

    /**
     * @example 'Acme Ltd'
     *
     * @return string
     */
    public function company(): string
    {
        $format = static::randomElement(static::$formats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'Ltd'
     *
     * @return string
     */
    public  function companySuffix(): string
    {
        return static::randomElement(static::$companySuffix);
    }

    /**
     * @example 'Job'
     *
     * @return string
     */
    public function jobTitle(): string
    {
        $format = static::randomElement(static::$jobTitleFormat);

        return $this->generator->parse($format);
    }
}
