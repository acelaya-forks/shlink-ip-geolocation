<?php

declare(strict_types=1);

namespace Shlinkio\Shlink\IpGeolocation\Model;

final class Location
{
    public function __construct(
        private string $countryCode,
        private string $countryName,
        private string $regionName,
        private string $city,
        private float $latitude,
        private float $longitude,
        private string $timeZone,
    ) {
    }

    public static function emptyInstance(): self
    {
        return new self('', '', '', '', 0.0, 0.0, '');
    }

    public function countryCode(): string
    {
        return $this->countryCode;
    }

    public function countryName(): string
    {
        return $this->countryName;
    }

    public function regionName(): string
    {
        return $this->regionName;
    }

    public function city(): string
    {
        return $this->city;
    }

    public function latitude(): float
    {
        return $this->latitude;
    }

    public function longitude(): float
    {
        return $this->longitude;
    }

    public function timeZone(): string
    {
        return $this->timeZone;
    }
}
