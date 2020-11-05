<?php

namespace NeoFaker\Provider\Contract;

interface Colour
{
    public function hexColour(): string;
    public function safeHexColour(): string;
    public function rgbColourAsArray(): array;
    public function rgbColour(): string;
    public function rgbCssColour(): string;
    public function rgbaCssColour(): string;
    public function safeColourName(): string;
    public function colourName(): string;
    public function hslColour(): string;
    public function hslColourAsArray(): string;
}
