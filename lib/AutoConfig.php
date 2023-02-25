<?php

/*
 * This file is part of the ICanBoogie package.
 *
 * (c) Olivier Laviale <olivier.laviale@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
