# CHANGELOG

## v7.0.0

### New Requirements

PHP 8.4+

### New features

None

### Deprecated Features

None

### Backward Incompatible Changes

None

### Other Changes

- The license is now BSD-3-Clause, as for the other ICanBoogie packages.



## v6.0.0

### New Requirements

- PHP 8.2+
- icanboogie/icanboogie v6.0
- icanboogie/prototype v6.0

### New features

- `ConfigBuilder` builds the `ICanBoogie\Prototype\Config` of the `prototype` config fragments: bind
  methods with `bind(Article::class, 'url', [ Hooks::class, 'url' ])`.
- `AutoConfig` binds the prototype configuration when the application boots.
- The service `ICanBoogie\Prototype\Config` is provided.
- The console command `prototype:list`, aliased `prototypes`, lists the callbacks bound to prototypes.

### Backward Incompatible Changes

- Removed `PrototypeConfigSynthesizer`. A `prototype` config fragment no longer returns an array of
  `Class::method` keys, it returns a closure that receives a `ConfigBuilder`.

    Before:

    ```php
    <?php

    // config/prototype.php

    return [

        'Article::url' => 'App\Hooks::url'

    ];
    ```

    After:

    ```php
    <?php

    // config/prototype.php

    use App\Article;
    use App\Hooks;
    use ICanBoogie\Binding\Prototype\ConfigBuilder;

    return fn(ConfigBuilder $config) => $config
        ->bind(Article::class, 'url', [ Hooks::class, 'url' ]);
    ```

### Other Changes

None
