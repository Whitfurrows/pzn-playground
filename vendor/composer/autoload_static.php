<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit00ac935278d7831935d9d97877f9898d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PZN\\Playground\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PZN\\Playground\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit00ac935278d7831935d9d97877f9898d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit00ac935278d7831935d9d97877f9898d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
