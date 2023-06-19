<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ca28a6dae3e844748d5499c12a45685
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MiladRahimi\\PhpCrypt\\Tests\\' => 27,
            'MiladRahimi\\PhpCrypt\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MiladRahimi\\PhpCrypt\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/miladrahimi/phpcrypt/tests',
        ),
        'MiladRahimi\\PhpCrypt\\' => 
        array (
            0 => __DIR__ . '/..' . '/miladrahimi/phpcrypt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ca28a6dae3e844748d5499c12a45685::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ca28a6dae3e844748d5499c12a45685::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1ca28a6dae3e844748d5499c12a45685::$classMap;

        }, null, ClassLoader::class);
    }
}
