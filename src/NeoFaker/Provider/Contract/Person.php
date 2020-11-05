<?php

namespace NeoFaker\Provider\Contract;

interface Person
{
    public function name(string $gender = null): string;
    public function firstName(string $gender = null): string;
    public function firstNameMale(): string;
    public function firstNameFemale(): string;
    public function lastName(string $gender = null): string;
    public function lastNameMale(): string;
    public function lastNameFemale(): string;
    public function title(string $gender = null): string;
    public function titleMale(): string;
    public function titleFemale(): string;
}
