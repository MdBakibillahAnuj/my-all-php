<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc1624a9fdbba36b18e7d5792a427566a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc1624a9fdbba36b18e7d5792a427566a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc1624a9fdbba36b18e7d5792a427566a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc1624a9fdbba36b18e7d5792a427566a::$classMap;

        }, null, ClassLoader::class);
    }
}
