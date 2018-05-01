<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInita4a0c50aa41face55641a3c1f877a98a
=======
class ComposerAutoloaderInit1ac56a1f216828df94b7d3476142ba03
>>>>>>> a727bb8b7a5b639e47753d08ba131c5b9f2b9132
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInita4a0c50aa41face55641a3c1f877a98a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInita4a0c50aa41face55641a3c1f877a98a', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInit1ac56a1f216828df94b7d3476142ba03', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit1ac56a1f216828df94b7d3476142ba03', 'loadClassLoader'));
>>>>>>> a727bb8b7a5b639e47753d08ba131c5b9f2b9132

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require_once __DIR__ . '/autoload_static.php';

<<<<<<< HEAD
            call_user_func(\Composer\Autoload\ComposerStaticInita4a0c50aa41face55641a3c1f877a98a::getInitializer($loader));
=======
            call_user_func(\Composer\Autoload\ComposerStaticInit1ac56a1f216828df94b7d3476142ba03::getInitializer($loader));
>>>>>>> a727bb8b7a5b639e47753d08ba131c5b9f2b9132
        } else {
            $map = require __DIR__ . '/autoload_namespaces.php';
            foreach ($map as $namespace => $path) {
                $loader->set($namespace, $path);
            }

            $map = require __DIR__ . '/autoload_psr4.php';
            foreach ($map as $namespace => $path) {
                $loader->setPsr4($namespace, $path);
            }

            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }

        $loader->register(true);

        if ($useStaticLoader) {
<<<<<<< HEAD
            $includeFiles = Composer\Autoload\ComposerStaticInita4a0c50aa41face55641a3c1f877a98a::$files;
=======
            $includeFiles = Composer\Autoload\ComposerStaticInit1ac56a1f216828df94b7d3476142ba03::$files;
>>>>>>> a727bb8b7a5b639e47753d08ba131c5b9f2b9132
        } else {
            $includeFiles = require __DIR__ . '/autoload_files.php';
        }
        foreach ($includeFiles as $fileIdentifier => $file) {
<<<<<<< HEAD
            composerRequirea4a0c50aa41face55641a3c1f877a98a($fileIdentifier, $file);
=======
            composerRequire1ac56a1f216828df94b7d3476142ba03($fileIdentifier, $file);
>>>>>>> a727bb8b7a5b639e47753d08ba131c5b9f2b9132
        }

        return $loader;
    }
}

<<<<<<< HEAD
function composerRequirea4a0c50aa41face55641a3c1f877a98a($fileIdentifier, $file)
=======
function composerRequire1ac56a1f216828df94b7d3476142ba03($fileIdentifier, $file)
>>>>>>> a727bb8b7a5b639e47753d08ba131c5b9f2b9132
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        require $file;

        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
    }
}
