<?php


namespace Infratron\WOPIHost\Contracts;


interface AuthenticationService
{
    public function generateToken(WOPIUser $user, CheckFileInfo $file);
}
