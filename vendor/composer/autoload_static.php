<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31f5060c7d835cd4ce82dd63160a0922
{
    public static $files = array (
        '6ee81e45e550fa4e22ce9131abb954e9' => __DIR__ . '/../..' . '/helper.php',
    );

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
            $loader->prefixLengthsPsr4 = ComposerStaticInit31f5060c7d835cd4ce82dd63160a0922::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31f5060c7d835cd4ce82dd63160a0922::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit31f5060c7d835cd4ce82dd63160a0922::$classMap;

        }, null, ClassLoader::class);
    }
}
