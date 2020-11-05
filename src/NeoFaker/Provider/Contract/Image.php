<?php

namespace NeoFaker\Provider\Contract;

interface Image
{
    public function imageUrl(int $width = 640, int $height = 480, ?string $category = null, bool $randomise = true, ?string $word = null, bool $grey = false): string;
    public function image(int $width = 640, int $height = 480, ?string $category = null, bool $randomise = true, ?string $word = null, bool $grey = false): string;
}
