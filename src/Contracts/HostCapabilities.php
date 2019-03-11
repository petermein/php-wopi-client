<?php


namespace Infratron\WOPIHost\Contracts;


interface HostCapabilities
{
    public function supportsCoauth(): bool;

    public function supportsCobalt(): bool;

    public function supportsFolders(): bool;

    public function supportsContainers(): bool;

    public function supportsLocks(): bool;

    public function supportsGetLock(): bool;

    public function supportsExtendedLockLength(): bool;

    public function supportsEcosystem(): bool;

    public function supportsGetFileWopiSrc(): bool;

    public function SupportedShareUrlTypes(): array;

    public function supportsScenarioLinks(): bool;

    public function supportsSecureStore(): bool;

    public function supportsFileCreation(): bool;

    public function supportsUpdate(): bool;

    public function supportsRename(): bool;

    public function supportsDeleteFile(): bool;

    public function supportsUserInfo(): bool;
}
