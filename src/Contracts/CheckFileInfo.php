<?php

namespace Infratron\WOPIHost\Contracts;


interface CheckFileInfo extends AbstractChildBased
{
    public function getBaseFileName(): string;

    public function getOwnerId(): string;

    public function getSize(): int;

    public function getVersion(): int;

    //TODO optional values

}
