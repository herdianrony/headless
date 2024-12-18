<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit86c6415b7fbb92652b7c8abe87bac0b7
{
    public static $files = array (
        '4cdafd4a5191caf078235e7dd119fdaf' => __DIR__ . '/..' . '/flightphp/core/flight/autoload.php',
    );

    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
        'G' => 
        array (
            'Ghostff\\Session\\' => 16,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
        'Ghostff\\Session\\' => 
        array (
            0 => __DIR__ . '/..' . '/ghostff/session/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'MongoLite' => 
            array (
                0 => __DIR__ . '/..' . '/agentejo/mongo-lite/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit86c6415b7fbb92652b7c8abe87bac0b7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit86c6415b7fbb92652b7c8abe87bac0b7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit86c6415b7fbb92652b7c8abe87bac0b7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit86c6415b7fbb92652b7c8abe87bac0b7::$classMap;

        }, null, ClassLoader::class);
    }
}
