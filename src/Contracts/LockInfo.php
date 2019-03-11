<?php


namespace Infratron\WOPIHost\Contracts;


use DateTime;

interface LockInfo
{
    public function getLock(): string;

    public function getDateCreated(): DateTime;

    public function isExpired(): bool;
}
