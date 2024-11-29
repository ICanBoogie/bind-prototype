<?php

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
