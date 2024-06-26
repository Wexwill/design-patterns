<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit632bbf014e97d9114076066dc925654e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpSite\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpSite\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PhpSite\\DesignPatterns\\BehavioralPatterns\\ChainOfResponsibility\\AbstractHandler' => __DIR__ . '/../..' . '/src/DesignPatterns/BehavioralPatterns/ChainOfResponsibility/AbstractHandler.php',
        'PhpSite\\DesignPatterns\\BehavioralPatterns\\ChainOfResponsibility\\DogHandler' => __DIR__ . '/../..' . '/src/DesignPatterns/BehavioralPatterns/ChainOfResponsibility/DogHandler.php',
        'PhpSite\\DesignPatterns\\BehavioralPatterns\\ChainOfResponsibility\\Handler' => __DIR__ . '/../..' . '/src/DesignPatterns/BehavioralPatterns/ChainOfResponsibility/Handler.php',
        'PhpSite\\DesignPatterns\\BehavioralPatterns\\ChainOfResponsibility\\MonkeyHandler' => __DIR__ . '/../..' . '/src/DesignPatterns/BehavioralPatterns/ChainOfResponsibility/MonkeyHandler.php',
        'PhpSite\\DesignPatterns\\BehavioralPatterns\\ChainOfResponsibility\\SquirrelHandler' => __DIR__ . '/../..' . '/src/DesignPatterns/BehavioralPatterns/ChainOfResponsibility/SquirrelHandler.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit632bbf014e97d9114076066dc925654e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit632bbf014e97d9114076066dc925654e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit632bbf014e97d9114076066dc925654e::$classMap;

        }, null, ClassLoader::class);
    }
}
