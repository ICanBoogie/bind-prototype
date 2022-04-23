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

use PHPUnit\Framework\TestCase;

final class ConfigTest extends TestCase
{
	public function test_article_url(): void
	{
		$article = new Article(123);

		$this->assertEquals("/articles/123", $article->url());
	}
}
