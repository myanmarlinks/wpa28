<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit35774247a13a6cd43cb1a535fc826b13
{
    public static $files = array (
        'f5554eff25cacc7d4747c78edb3063b4' => __DIR__ . '/../..' . '/wpa28/helpers.php',
        'e7f5702a2aea6cbcf78ad1b1412bbe5a' => __DIR__ . '/../..' . '/wpa28/test.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wpa28\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wpa28\\' => 
        array (
            0 => __DIR__ . '/../..' . '/wpa28/src',
        ),
    );

    public static $classMap = array (
        'Config' => __DIR__ . '/../..' . '/wpa28/provider/ConfigProvider.php',
        'DB' => __DIR__ . '/../..' . '/wpa28/provider/Database.php',
        'HDB' => __DIR__ . '/../..' . '/wpa28/provider/Hdb.php',
        'HhDB' => __DIR__ . '/../..' . '/wpa28/provider/HmDB.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit35774247a13a6cd43cb1a535fc826b13::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit35774247a13a6cd43cb1a535fc826b13::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit35774247a13a6cd43cb1a535fc826b13::$classMap;

        }, null, ClassLoader::class);
    }
}
