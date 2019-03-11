<?php


namespace Infratron\WOPIHost\Contracts;


interface AccessTokenInfo
{
    public function getAccessToken(): string;

    public function setAccessToken(string $token);

    public function getExpiry(): int;

    public function setExpiry(int $expiry);
}
