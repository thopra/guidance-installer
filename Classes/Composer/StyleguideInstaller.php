<?php

namespace Thopra\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class StyleguideInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return 'Styleguide/Templates/'.$package;
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'thopra-styleguide-template' === $packageType;
    }
}