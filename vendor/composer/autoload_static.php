<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit680a68a6594d074b24ba5c3192172b44
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit680a68a6594d074b24ba5c3192172b44::$classMap;

        }, null, ClassLoader::class);
    }
}
