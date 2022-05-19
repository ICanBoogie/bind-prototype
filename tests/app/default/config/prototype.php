<?php

use ICanBoogie\Binding\Prototype\ConfigBuilder;
use Test\ICanBoogie\Binding\Prototype\Article;
use Test\ICanBoogie\Binding\Prototype\Hooks;

return fn (ConfigBuilder $config) => $config
	->bind(Article::class, 'get_url', [ Hooks::class, 'get_url' ])
;
