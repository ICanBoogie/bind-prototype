<?php

namespace ICanBoogie\Binding\Prototype;

use ICanBoogie\Application;
use ICanBoogie\Prototype;

/**
 * Registered with `autoboot` in `composer.json`.
 */
final class Boot
{
    /**
     * Binds prototype configuration.
     */
    public static function boot(Application $app): void
    {
        Prototype::bind($app->config_for_class(Prototype\Config::class));
    }
}
