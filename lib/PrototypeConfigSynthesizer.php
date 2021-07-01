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

use InvalidArgumentException;

use function explode;
use function ICanBoogie\format;
use function is_string;
use function strpos;

final class PrototypeConfigSynthesizer
{
	/**
	 * Synthesizes the "prototype" config from the "prototype" config fragments.
	 *
	 * @param array<string, array<string, callable>> $fragments
	 *
	 * @return array<string, array<string, callable>
	 */
	static public function synthesize(array $fragments): array
	{
		$methods = [];

		foreach ($fragments as $pathname => $fragment)
		{
			foreach ($fragment as $method => $callback)
			{
				self::assert_valid_prototype_method_name($method, $pathname);

				[ $class, $method ] = explode('::', $method);

				if (is_string($callback) && strpos($callback, '::'))
				{
					$callback = explode('::', $callback, 2);
				}

				$methods[$class][$method] = $callback;
			}
		}

		return $methods;
	}

	/**
	 * Asserts that a prototype method name is valid.
	 *
	 * @throws InvalidArgumentException if a method definition is missing the '::' separator.
	 */
	static private function assert_valid_prototype_method_name(string $method, string $pathname): void
	{
		if (!str_contains($method, '::'))
		{
			throw new InvalidArgumentException(format
			(
				"Invalid method name %method in %pathname, expected %expected.", [

					'method' => $method,
					'pathname' => $pathname,
					'expected' => "{class_name}::{method_name}"

				]
			));
		}
	}
}
