<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite228abfca8caa01b9838ee23f3bcba91
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite228abfca8caa01b9838ee23f3bcba91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite228abfca8caa01b9838ee23f3bcba91::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
