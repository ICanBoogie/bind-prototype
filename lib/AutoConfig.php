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

use ICanBoogie\Application;
use ICanBoogie\Prototype;

final class AutoConfig
{
    /**
     * Binds prototype configuration.
     */
    public static function configure(Application $app): void
    {
        Prototype::bind($app->configs->config_for_class(Prototype\Config::class));
    }
}
