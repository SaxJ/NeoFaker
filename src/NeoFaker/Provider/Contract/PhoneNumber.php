<?php

namespace NeoFaker\Provider\Contract;

interface PhoneNumber
{
    public function phoneNumber(): string;
    public function e164PhoneNumber(): string;
    public function imei(): string;
}
