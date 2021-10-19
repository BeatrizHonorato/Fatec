<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4a0bf8db9eb2bcb4ed6b1f3bbfe0eccb
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4a0bf8db9eb2bcb4ed6b1f3bbfe0eccb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4a0bf8db9eb2bcb4ed6b1f3bbfe0eccb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4a0bf8db9eb2bcb4ed6b1f3bbfe0eccb::$classMap;

        }, null, ClassLoader::class);
    }
}