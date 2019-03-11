<?php


namespace Infratron\WOPIHost\Contracts;


interface CheckContainerInfo
{
    public function getName(): string;

    public function getHostUrl(): ?string;

    public function isEduUser(): ?bool;

    public function licenseCheckForEditIsEnabled(): ?bool;

    public function getSharingUrl(): ?string;

    public function userCanCreateChildContainer(): ?bool;

    public function userCanCreateChildFile(): ?bool;

    public function userCanDelete(): ?bool;

    public function userCanRename(): ?bool;

}
