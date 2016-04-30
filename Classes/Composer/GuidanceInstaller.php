<?php

namespace Thopra\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class GuidanceInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $extraConfig = $this->composer->getPackage()->getExtra();
        if (is_array($extraConfig) && is_array($extraConfig['thopra/guidance'])) {
            if (isset($extraConfig['thopra/guidance']['install-path'])) {
                return $extraConfig['thopra/guidance']['install-path'];
            }
        }
        return 'guidance';
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'thopra-guidance' === $packageType;
    }
}