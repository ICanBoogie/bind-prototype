<?php

/*
 * This file is part of the ICanBoogie package.
 *
 * (c) Olivier Laviale <olivier.laviale@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Test\ICanBoogie\Binding\Prototype;

use ICanBoogie\Prototype;
use PHPUnit\Framework\TestCase;

use function ICanBoogie\app;

/**
 * @group integration
 */
final class ApplicationTest extends TestCase
{
	public function test_get_prototype_config()
	{
		$config = app()->configs->config_for_class(Prototype\Config::class);

		$this->assertNotEmpty($config->bindings);
		$this->assertArrayHasKey('Article', $config->bindings);
		$this->assertSame([

			'url' => [ 'App\Hooks', 'url' ],
			'get_url' => [ 'App\Hooks', 'get_url' ],

		], $config->bindings['Article']);
	}
}
