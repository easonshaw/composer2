<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit411a604c810eb8c687457d45978ee14a
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit411a604c810eb8c687457d45978ee14a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
