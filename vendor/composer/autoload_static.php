<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbfa691fce6574623d5a8fc727f170bf9
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbfa691fce6574623d5a8fc727f170bf9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbfa691fce6574623d5a8fc727f170bf9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
