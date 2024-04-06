<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit40b41ed2be7cfc058a22d1b5aa2c33a4
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit40b41ed2be7cfc058a22d1b5aa2c33a4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit40b41ed2be7cfc058a22d1b5aa2c33a4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit40b41ed2be7cfc058a22d1b5aa2c33a4::$classMap;

        }, null, ClassLoader::class);
    }
}
