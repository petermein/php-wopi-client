<?php


namespace Infratron\WOPIHost\Contracts;


interface AbstractChildBase
{
    public function getName(): string;

    public function getUrl(): string;
}
