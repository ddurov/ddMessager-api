<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit70c427c595b67b31e6e2871eb0ed768d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'K' => 
        array (
            'Krugozor\\Database\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Krugozor\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/krugozor/database/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit70c427c595b67b31e6e2871eb0ed768d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit70c427c595b67b31e6e2871eb0ed768d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit70c427c595b67b31e6e2871eb0ed768d::$classMap;

        }, null, ClassLoader::class);
    }
}
