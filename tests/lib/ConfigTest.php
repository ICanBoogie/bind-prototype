<?php

namespace Test\ICanBoogie\Binding\Prototype;

use PHPUnit\Framework\TestCase;

final class ConfigTest extends TestCase
{
    public function test_article_url(): void
    {
        $article = new Article(123);
        $actual = $article->url();

        $this->assertEquals("/articles/123", $actual);
    }
}
