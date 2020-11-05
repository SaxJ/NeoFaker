<?php

namespace NeoFaker\Provider\Contract;

interface Barcode
{
    public function ean13(): string;
    public function ean8(): string;
    public function isbn10(): string;
    public function isbn13(): string;
}
