<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit219078ae205ac62d80eb278534e70bff
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
        'P' => 
        array (
            'Predis\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Predis\\' => 
        array (
            0 => __DIR__ . '/..' . '/predis/predis/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit219078ae205ac62d80eb278534e70bff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit219078ae205ac62d80eb278534e70bff::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
