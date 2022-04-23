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

use ICanBoogie\Config\Builder;
use ICanBoogie\Prototype\Config;

final class ConfigBuilder implements Builder
{
	private \ICanBoogie\Prototype\ConfigBuilder $inner_builder;

	public function __construct()
	{
		$this->inner_builder = new \ICanBoogie\Prototype\ConfigBuilder();
	}

	public function build(): Config
	{
		return $this->inner_builder->build();
	}


	/**
	 * @param class-string $target_class The class that will receive the method extension.
	 * @param string $method The name of the method to add to the class.
	 * @param callable $callable The handler for the method.
	 *
	 * @return $this
	 */
	public function bind(string $target_class, string $method, callable $callable): self
	{
		$this->inner_builder->bind($target_class, $method, $callable);

		return $this;
	}
}
