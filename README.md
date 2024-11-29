# bind-prototype

[![Release](https://img.shields.io/packagist/v/icanboogie/bind-prototype.svg)](https://packagist.org/packages/icanboogie/bind-prototype)
[![Code Coverage](https://coveralls.io/repos/github/ICanBoogie/bind-prototype/badge.svg?branch=6.0)](https://coveralls.io/r/ICanBoogie/bind-prototype?branch=6.0)
[![Downloads](https://img.shields.io/packagist/dt/icanboogie/bind-prototype.svg)](https://packagist.org/packages/icanboogie/bind-prototype)

The **icanboogie/bind-prototype** package binds [icanboogie/prototype][] to [ICanBoogie][], using its
[Autoconfig feature][]. It provides a config synthesizer for prototype methods defined in `prototype`
configuration fragments.

```php
<?php

namespace ICanBoogie;

require 'vendor/autoload.php';

$app = boot();

$app->configs[Prototype\Config::class]; // obtain the "prototype" config.
```

#### Installation

```shell
composer require icanboogie/bind-prototype
```



## Binding prototype methods using `prototype` config fragments

Using `prototype` configuration fragments, components may bind multiple prototype methods.

The following example demonstrates how an application may bind a `url()` method and a `url` property to instances of `Article`:

```php
<?php

// config/prototype.php

namespace App;

use ICanBoogie\Binding\Prototype\ConfigBuilder;

return fn(ConfigBuilder $config) => $config
    ->bind(Article::class, 'url', [ Hooks::class, 'url' ])
    ->bind(Article::class, 'get_url', [ Hooks::class, 'get_url' ]);
```





----------



## Continuous Integration

The project is continuously tested by [GitHub actions](https://github.com/ICanBoogie/bind-prototype/actions).

[![Tests](https://github.com/ICanBoogie/bind-prototype/actions/workflows/test.yml/badge.svg?branch=6.0)](https://github.com/ICanBoogie/bind-prototype/actions/workflows/test.yml)
[![Static Analysis](https://github.com/ICanBoogie/bind-prototype/actions/workflows/static-analysis.yml/badge.svg?branch=6.0)](https://github.com/ICanBoogie/bind-prototype/actions/workflows/static-analysis.yml)
[![Code Style](https://github.com/ICanBoogie/bind-prototype/actions/workflows/code-style.yml/badge.svg?branch=6.0)](https://github.com/ICanBoogie/bind-prototype/actions/workflows/code-style.yml)



## Code of Conduct

This project adheres to a [Contributor Code of Conduct](CODE_OF_CONDUCT.md). By participating in
this project and its community, you're expected to uphold this code.



## Contributing

See [CONTRIBUTING](CONTRIBUTING.md) for details.



[icanboogie/prototype]:  https://github.com/ICanBoogie/Prototype
[Autoconfig feature]:    https://icanboogie.org/docs/4.0/autoconfig
[ICanBoogie]:            https://icanboogie.org
