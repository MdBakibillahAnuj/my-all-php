<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb722a8c631ae76c2359dfb82d48509c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb722a8c631ae76c2359dfb82d48509c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb722a8c631ae76c2359dfb82d48509c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdb722a8c631ae76c2359dfb82d48509c::$classMap;

        }, null, ClassLoader::class);
    }
}
