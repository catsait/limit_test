<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8648749c01312df31bb22d47398d2b36
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sirm\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sirm\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/sirm',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8648749c01312df31bb22d47398d2b36::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8648749c01312df31bb22d47398d2b36::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
