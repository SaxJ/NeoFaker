<?php

namespace NeoFaker\Provider\Contract;

interface Biased
{
    public function biasedNumberBetween(int $min = 0, int $max = 100, callable $func = 'sqrt');
}
