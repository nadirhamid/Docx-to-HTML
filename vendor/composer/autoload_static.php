<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite7fa66ce483ebb51a428a8668adbcb6b
{
    public static $classMap = array (
        'Docx_reader\\Docx_reader' => __DIR__ . '/../..' . '/source/docx_reader.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite7fa66ce483ebb51a428a8668adbcb6b::$classMap;

        }, null, ClassLoader::class);
    }
}
