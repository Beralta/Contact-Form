<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd751713988987e9331980363e24189ce
{
    public static $files = array (
        '0c48edfd83033889f779790f8f59dd48' => __DIR__ . '/../..' . '/app/functions/pages.php',
        '1a034cec71159224725114f89a820cf1' => __DIR__ . '/../..' . '/app/functions/validate.php',
        '08553373174aed5b2079e6334c2d2257' => __DIR__ . '/../..' . '/app/functions/custom.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd751713988987e9331980363e24189ce::$classMap;

        }, null, ClassLoader::class);
    }
}
