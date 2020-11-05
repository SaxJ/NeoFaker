<?php

namespace NeoFaker\Provider\Contract;

use DateInterval;
use DateTime as GlobalDateTime;
use DateTimeInterface;

interface DateTime
{
    public function unixTime(DateTimeInterface $max = new GlobalDateTime()): int;
    public function dateTime(DateTimeInterface $max = new GlobalDateTime(), ?string $timezone = null): DateTimeInterface;
    public function dateTimeAD(DateTimeInterface $max = new GlobalDateTime(), ?string $timezone = null): DateTimeInterface;
    public function iso8601(DateTimeInterface $max = new GlobalDateTime()): string;
    public function date(string $format, DateTimeInterface $max = new GlobalDateTime()): string;
    public function time(string $format, DateTimeInterface $max = new GlobalDateTime()): string;
    public function dateTimeBetween(DateTimeInterface $start, DateTimeInterface $end, string $timezone): DateTimeInterface;
    public function dateTimeInInterval(DateTimeInterface $date, DateInterval $interval, string $timezone): DateTimeInterface;
    public function dateTimeThisCentury(DateTimeInterface $max = new GlobalDateTime(), ?string $timezone = null): DateTimeInterface;
    public function dateTimeThisDecade(DateTimeInterface $max = new GlobalDateTime(), ?string $timezone = null): DateTimeInterface;
    public function dateTimeThisYear(DateTimeInterface $max = new GlobalDateTime(), ?string $timezone = null): DateTimeInterface;
    public function dateTimeThisMonth(DateTimeInterface $max = new GlobalDateTime(), ?string $timezone = null): DateTimeInterface;
    public function amPm(DateTimeInterface $max = new GlobalDateTime()): string;
    public function dayOfMonth(DateTimeInterface $max = new GlobalDateTime()): string;
    public function dayOfWeek(DateTimeInterface $max = new GlobalDateTime()): string;
    public function month(DateTimeInterface $max = new GlobalDateTime()): string;
    public function monthName(DateTimeInterface $max = new GlobalDateTime()): string;
    public function year(DateTimeInterface $max = new GlobalDateTime()): string;
    public function century(): string;
    public function timezone(): string;
    public function getDefaultTimezone(): string;
}
