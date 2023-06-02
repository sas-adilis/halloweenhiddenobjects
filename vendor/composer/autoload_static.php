<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd2d0779ec3a255712ccc32bd40ebab9
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Adilis\\HiddenObjects\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Adilis\\HiddenObjects\\' => 
        array (
            0 => __DIR__ . '/..' . '/adilis/hiddenobjects/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd2d0779ec3a255712ccc32bd40ebab9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd2d0779ec3a255712ccc32bd40ebab9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcd2d0779ec3a255712ccc32bd40ebab9::$classMap;

        }, null, ClassLoader::class);
    }
}
