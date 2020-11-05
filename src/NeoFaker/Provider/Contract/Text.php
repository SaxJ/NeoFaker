<?php

namespace NeoFaker\Provider\Contract;

interface Text
{
    public function realText(int $maxChars = 200, int $indexSize = 2): string;
}
