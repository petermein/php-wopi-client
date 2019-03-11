<?php


namespace Infratron\WOPIHost\Contracts;


interface BootstrapRootContainerInfo
{
    public function getRootContainerInfo();

    public function getBootstrapInfo(): BootstrapInfo;

    public function getAccessTokenInfo(): AccessTokenInfo;

}
