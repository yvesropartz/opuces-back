<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2705c79b04b542a1b9a91013cc1d3f9e
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OPuces\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OPuces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/class',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2705c79b04b542a1b9a91013cc1d3f9e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2705c79b04b542a1b9a91013cc1d3f9e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2705c79b04b542a1b9a91013cc1d3f9e::$classMap;

        }, null, ClassLoader::class);
    }
}