<?php

namespace NeoFaker\Provider\Contract;

interface File
{
    public function mimeType(): string;
    public function fileExtension(): string;
    public function file(string $source, string $target, bool $fullPath): string;
}
