<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit46db1f3b94e0ba1d90eef0e575966a39
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit46db1f3b94e0ba1d90eef0e575966a39::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit46db1f3b94e0ba1d90eef0e575966a39::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit46db1f3b94e0ba1d90eef0e575966a39::$classMap;

        }, null, ClassLoader::class);
    }
}
