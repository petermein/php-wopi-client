<?php


namespace Infratron\WOPIHost\Contracts;


interface Container
{
    //TODO: remake array into strict structures maybe

    public function getChildContainers(): array;

    public function getChildFiles(): array;
}
