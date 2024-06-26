<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0b6f5c25d62f704bab06577904c97059
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0b6f5c25d62f704bab06577904c97059::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0b6f5c25d62f704bab06577904c97059::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0b6f5c25d62f704bab06577904c97059::$classMap;

        }, null, ClassLoader::class);
    }
}
