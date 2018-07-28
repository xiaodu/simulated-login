<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita01a1a0fe34218b6bf58fd287b6af033
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'lib\\' => 4,
        ),
        'c' => 
        array (
            'config\\' => 7,
        ),
        'a' => 
        array (
            'actions\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'lib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
        'config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
        'actions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/actions',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita01a1a0fe34218b6bf58fd287b6af033::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita01a1a0fe34218b6bf58fd287b6af033::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}