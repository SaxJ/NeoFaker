<?php

namespace NeoFaker\Provider\Contract;

interface Internet
{
    public function email(): string;
    public function safeEmail(): string;
    public function freeEmail(): string;
    public function companyEmail(): string;
    public function freeEmailDomain(): string;
    public function safeEmailDomain(): string;
    public function userName(): string;
    public function password(int $minLength = 6, int $maxLength = 20): string;
    public function domainName(): string;
    public function domainWord(): string;
    public function tld(): string;
    public function url(): string;
    public function slug(int $nWords = 6, bool $variableNumberWords = true): string;
    public function ipv4(): string;
    public function ipv6(): string;
    public function localIpv4(): string;
    public function macAddress(): string;
}
