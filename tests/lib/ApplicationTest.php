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

use function ICanBoogie\app;

/**
 * @group integration
 */
class ApplicationTest extends \PHPUnit_Framework_TestCase
{
	public function test_get_prototype_config()
	{
		$config = app()->configs['prototype'];

		$this->assertNotEmpty($config);
		$this->assertArrayHasKey('Article', $config);
		$this->assertSame([

			'url' => [ 'App\Hooks', 'url' ],
			'get_url' => [ 'App\Hooks', 'get_url' ],

		], $config['Article']);
	}
}
