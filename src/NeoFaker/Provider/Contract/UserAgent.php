<?php

namespace NeoFaker\Provider\Contract;

interface UserAgent
{
    public function macProcessor(): string;
    public function linuxProcessor(): string;
    public function userAgent(): string;
    public function chrome(): string;
    public function firefox(): string;
    public function safari(): string;
    public function opera(): string;
    public function internetExplorer(): string;
    public function windowsPlatformToken(): string;
    public function macPlatformToken(): string;
    public function linuxPlatformToken(): string;
}
