<?php

namespace NeoFaker\Provider\Contract;

final class Coordinates
{
    private float $lat;
    private float $lng;

    public function __construct(float $latitude, float $longitude)
    {
        $this->lat = $latitude;
        $this->lng = $longitude;
    }

    public function getLatitude(): float
    {
        return $this->lat;
    }

    public function getLongitude(): float
    {
        return $this->lng;
    }
}
