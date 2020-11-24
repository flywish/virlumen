<?php

namespace Installer;

use Composer\Script\Event;

class Script
{
    public static function install(Event $event)
    {
        $installer = new OptionalPackages($event->getIO(), $event->getComposer());

        $installer->io->write('<info>Setting up optional packages</info>');

        $installer->setupRuntimeDir();
        $installer->removeDevDependencies();
        $installer->installHyperfScript();
        $installer->promptForOptionalPackages();
        $installer->updateRootPackage();
        $installer->removeInstallerFromDefinition();
        $installer->finalizePackage();
    }
}
