<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit27888b5d7e986cc7796f78ff79ad6137
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
        'I' => 
        array (
            'Ishop\\' => 6,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
        'Ishop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ishop/core',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit27888b5d7e986cc7796f78ff79ad6137::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit27888b5d7e986cc7796f78ff79ad6137::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit27888b5d7e986cc7796f78ff79ad6137::$classMap;

        }, null, ClassLoader::class);
    }
}