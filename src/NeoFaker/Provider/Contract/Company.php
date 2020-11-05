<?php

namespace NeoFaker\Provider\Contract;

interface Company
{
    public function company(): string;
    public function companySuffix(): string;
    public function jobTitle(): string;
}
