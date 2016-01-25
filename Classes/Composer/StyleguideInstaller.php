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
        $prefix = substr($package->getName(), 0, 27);
        if ('thopra/styleguide-template-' !== $prefix) {
            throw new \InvalidArgumentException(
                'Unable to install styleguide template. Templates MUST be named "thopra/styleguide-template-*"'
            );
        }
        return 'Styleguide/Templates/'.str_replace($prefix, "", $package->getName());
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'thopra-styleguide-template' === $packageType;
    }
}