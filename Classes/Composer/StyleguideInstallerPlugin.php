<?php
namespace Thopra\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class StyleguideInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new StyleguideInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}