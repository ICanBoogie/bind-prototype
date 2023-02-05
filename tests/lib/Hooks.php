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

final class Hooks
{
    public static function get_url(Article $article): string
    {
        return $article->url();
    }

    public static function url(Article $article): string
    {
        return "/articles/$article->id";
    }
}
