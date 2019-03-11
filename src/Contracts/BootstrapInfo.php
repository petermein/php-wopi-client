<?php


namespace Infratron\WOPIHost\Contracts;


interface BootstrapInfo
{
    public function getEcosystemUrl(): string;

    public function getUserId(): string;

    public function getSignInName(): string;

    public function getUserFriendlyName(): string;
}


