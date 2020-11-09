<?php

namespace NeoFaker\Provider\US;

use NeoFaker\Provider\Contract\Address as AddressContract;
use NeoFaker\Provider\Contract\Coordinates;

class Address extends Base implements AddressContract
{
    protected static $citySuffix = array('Ville');
    protected static $streetSuffix = array('Street');
    protected static $cityFormats = array(
        '{{firstName}}{{citySuffix}}',
    );
    protected static $streetNameFormats = array(
        '{{lastName}} {{streetSuffix}}'
    );
    protected static $streetAddressFormats = array(
        '{{buildingNumber}} {{streetName}}'
    );
    protected static $addressFormats = array(
        '{{streetAddress}} {{postcode}} {{city}}',
    );

    protected static $buildingNumber = array('%#');
    protected static $postcode = array('#####');
    protected static $country = array();

    /**
     * @example 'town'
     */
    public  function citySuffix(): string
    {
        return static::randomElement(static::$citySuffix);
    }

    /**
     * @example 'Avenue'
     */
    public  function streetSuffix(): string
    {
        return static::randomElement(static::$streetSuffix);
    }

    /**
     * @example '791'
     */
    public  function buildingNumber(): string
    {
        return static::numerify(static::randomElement(static::$buildingNumber));
    }

    /**
     * @example 'Sashabury'
     */
    public function city(): string
    {
        $format = static::randomElement(static::$cityFormats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'Crist Parks'
     */
    public function streetName(): string
    {
        $format = static::randomElement(static::$streetNameFormats);

        return $this->generator->parse($format);
    }

    /**
     * @example '791 Crist Parks'
     */
    public function streetAddress(): string
    {
        $format = static::randomElement(static::$streetAddressFormats);

        return $this->generator->parse($format);
    }

    /**
     * @example 86039-9874
     */
    public function postcode(): string
    {
        return static::toUpper(static::bothify(static::randomElement(static::$postcode)));
    }

    /**
     * @example '791 Crist Parks, Sashabury, IL 86039-9874'
     */
    public function address(): string
    {
        $format = static::randomElement(static::$addressFormats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'Japan'
     */
    public function country(): string
    {
        return static::randomElement(static::$country);
    }

    /**
     * @example '77.147489'
     * @param float|int $min
     * @param float|int $max
     * @return float Uses signed degrees format (returns a float number between -90 and 90)
     */
    public function latitude($min = -90, $max = 90): float
    {
        return static::randomFloat(6, $min, $max);
    }

    /**
     * @example '86.211205'
     * @param float|int $min
     * @param float|int $max
     * @return float Uses signed degrees format (returns a float number between -180 and 180)
     */
    public function longitude($min = -180, $max = 180): float
    {
        return static::randomFloat(6, $min, $max);
    }

    /**
     * @example array('77.147489', '86.211205')
     * @return array | latitude, longitude
     */
    public function localCoordinates(): Coordinates
    {
        return new Coordinates($this->latitude(), $this->longitude());
    }
}
