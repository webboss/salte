<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb8b962056525a8658edff0b33a647ca0
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        'f084d01b0a599f67676cffef638aa95b' => __DIR__ . '/..' . '/smarty/smarty/libs/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Validator\\' => 15,
            'Zend\\Uri\\' => 9,
            'Zend\\Stdlib\\' => 12,
            'Zend\\Mime\\' => 10,
            'Zend\\Math\\' => 10,
            'Zend\\Mail\\' => 10,
            'Zend\\Loader\\' => 12,
            'Zend\\Http\\' => 10,
            'Zend\\Expressive\\Session\\' => 24,
            'Zend\\Expressive\\Csrf\\' => 21,
            'Zend\\Escaper\\' => 13,
            'Zend\\Crypt\\' => 11,
        ),
        'P' => 
        array (
            'Psr\\Http\\Server\\' => 16,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'E' => 
        array (
            'Expressive\\' => 11,
        ),
        'C' => 
        array (
            'Communitys\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-validator/src',
        ),
        'Zend\\Uri\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-uri/src',
        ),
        'Zend\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stdlib/src',
        ),
        'Zend\\Mime\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-mime/src',
        ),
        'Zend\\Math\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-math/src',
        ),
        'Zend\\Mail\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-mail/src',
        ),
        'Zend\\Loader\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-loader/src',
        ),
        'Zend\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-http/src',
        ),
        'Zend\\Expressive\\Session\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-expressive-session/src',
        ),
        'Zend\\Expressive\\Csrf\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-expressive-csrf/src',
        ),
        'Zend\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-escaper/src',
        ),
        'Zend\\Crypt\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-crypt/src',
        ),
        'Psr\\Http\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-server-handler/src',
            1 => __DIR__ . '/..' . '/psr/http-server-middleware/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'Expressive\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api/Expressive',
        ),
        'Communitys\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api/Communitys',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb8b962056525a8658edff0b33a647ca0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb8b962056525a8658edff0b33a647ca0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}