<?php

namespace NeoFaker\Provider\Contract;

interface Address
{
    public function citySuffix(): string;
    public function streetSuffix(): string;
    public function buildingNumber(): string;
    public function city(): string;
    public function streetName(): string;
    public function streetAddress(): string;
    public function postcode(): string;
    public function address(): string;
    public function country(): string;
    public function latitude(): float;
    public function longitude(): float;
    public function localCoordinates(): Coordinates;
}
