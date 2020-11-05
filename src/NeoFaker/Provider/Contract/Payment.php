<?php

namespace NeoFaker\Provider\Contract;

use DateTimeInterface;

interface Payment
{
    public function creditCardType(): string;
    public function creditCardNumber(string $type, bool $formatted, string $seperator = '-'): string;
    public function creditCardExpirationDate(bool $valid = true): DateTimeInterface;
    public function creditCardExpirationDateString(bool $valid, ?string $format = null): string;
    public function creditCardDetails(bool $valid = true): array;
    public function iban(string $countryCode, string $prefix = '', ?int $length = null): string;
    public function swiftBicNumber(): string;
}
