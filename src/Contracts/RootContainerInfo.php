<?php


namespace Infratron\WOPIHost\Contracts;


interface RootContainerInfo
{
    public function getChildContainer(): ChildContainer;

    public function getContainerInfo(): CheckContainerInfo;
}
