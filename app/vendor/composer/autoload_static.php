<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd7d0020db3bf514ddbe01e3e6a453b2f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SITEROOT\\' => 9,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Core\\' => 5,
            'Controllers\\' => 12,
        ),
        'A' => 
        array (
            'APPROOT\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SITEROOT\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../public',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
        'APPROOT\\' => 
        array (
            0 => '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd7d0020db3bf514ddbe01e3e6a453b2f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd7d0020db3bf514ddbe01e3e6a453b2f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
