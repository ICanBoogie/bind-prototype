<?php

use ICanBoogie\Binding\Prototype\ConfigBuilder;
use Test\ICanBoogie\Binding\Prototype\Article;
use Test\ICanBoogie\Binding\Prototype\Hooks;

return fn(ConfigBuilder $config) => $config
    ->bind(Article::class, 'url', [ Hooks::class, 'url' ]);
