<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd8873d307c9824adb5dd1a15c6eac7d5
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'I' => 
        array (
            'Inpsyde\\LogzIoMonolog\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Inpsyde\\LogzIoMonolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/inpsyde/logzio-monolog/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd8873d307c9824adb5dd1a15c6eac7d5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd8873d307c9824adb5dd1a15c6eac7d5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
