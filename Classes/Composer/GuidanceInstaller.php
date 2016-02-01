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