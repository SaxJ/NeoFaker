<?php

namespace NeoFaker\Provider\Contract;

interface Lorem
{
    public function word(): string;
    public function words(): array;
    public function sentence(): string;
    public function sentences(): array;
    public function paragraph(): string;
    public function paragraphs(): array;
    public function text(int $chars = 200): string;
}
