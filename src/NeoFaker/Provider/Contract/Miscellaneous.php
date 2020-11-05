<?php

namespace NeoFaker\Provider\Contract;

interface Miscellaneous
{
    public function boolean(int $chance): bool;
    public function md5(): string;
    public function sha1(): string;
    public function sha256(): string;
    public function locale(): string;
    public function countryCode(): string;
    public function countryISOAlpha3(): string;
    public function languageCode(): string;
    public function currencyCode(): string;
    public function emoji(): string;
}
