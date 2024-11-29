<?php

namespace Test\ICanBoogie\Binding\Prototype;

use ICanBoogie\Autoconfig\Autoconfig;
use PHPUnit\Framework\TestCase;

use function dirname;

final class AutoconfigTest extends TestCase
{
    public function test_autoconfig(): void
    {
        $autoconfig = Autoconfig::get();

        $this->assertArrayHasKey(dirname(__DIR__, 2) . '/config', $autoconfig->config_paths);
    }
}
