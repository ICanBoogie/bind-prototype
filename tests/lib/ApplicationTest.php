<?php

namespace Test\ICanBoogie\Binding\Prototype;

use ICanBoogie\Prototype;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

use function ICanBoogie\app;

#[Group('integration')]
final class ApplicationTest extends TestCase
{
    public function test_get_prototype_config(): void
    {
        $config = app()->configs->config_for_class(Prototype\Config::class);

        $this->assertNotEmpty($config->bindings);
        $this->assertArrayHasKey(Article::class, $config->bindings);
        $this->assertSame([

            'url' => [Hooks::class, 'url'],
            'get_url' => [Hooks::class, 'get_url'],

        ], $config->bindings[Article::class]);
    }
}
