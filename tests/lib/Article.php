<?php

namespace Test\ICanBoogie\Binding\Prototype;

use ICanBoogie\PrototypeTrait;

/**
 * @method string url()
 * @property-read string $url
 */
class Article
{
    use PrototypeTrait;

    public function __construct(
        public int $id
    ) {
    }
}
