<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe2c6b091a20983a6b6bdcfb1589e701
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'UltraMsg\\WhatsAppApi' => __DIR__ . '/..' . '/ultramsg/whatsapp-php-sdk/ultramsg.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitbe2c6b091a20983a6b6bdcfb1589e701::$classMap;

        }, null, ClassLoader::class);
    }
}
