<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a6f05128362001f91eae67c5815c234
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a6f05128362001f91eae67c5815c234::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a6f05128362001f91eae67c5815c234::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1a6f05128362001f91eae67c5815c234::$classMap;

        }, null, ClassLoader::class);
    }
}
