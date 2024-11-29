<?php

namespace ICanBoogie\Binding\Prototype;

use ICanBoogie\ConfigProvider;
use ICanBoogie\Prototype;

final class AutoConfig
{
    /**
     * Binds prototype configuration.
     */
    public static function configure(ConfigProvider $config_provider): void
    {
        Prototype::bind($config_provider->config_for_class(Prototype\Config::class));
    }
}
