<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit04b1cfb93b3690d0928d8e97d9ee135a
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit04b1cfb93b3690d0928d8e97d9ee135a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit04b1cfb93b3690d0928d8e97d9ee135a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit04b1cfb93b3690d0928d8e97d9ee135a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
