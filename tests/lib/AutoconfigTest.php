<?php

namespace Test\ICanBoogie\Binding\Prototype;

use ICanBoogie\Autoconfig\Autoconfig;
use PHPUnit\Framework\TestCase;

use function dirname;
use function ICanBoogie\get_autoconfig;

final class AutoconfigTest extends TestCase
{
    public function test_autoconfig(): void
    {
        $autoconfig = get_autoconfig();

        $this->assertArrayHasKey(dirname(__DIR__, 2) . '/config', $autoconfig[Autoconfig::CONFIG_PATH]);
    }
}
