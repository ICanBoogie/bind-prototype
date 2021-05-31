# bind-prototype

[![Release](https://img.shields.io/packagist/v/icanboogie/bind-prototype.svg)](https://packagist.org/packages/icanboogie/bind-prototype)
[![Build Status](https://img.shields.io/github/workflow/status/ICanBoogie/bind-prototype/test)](https://github.com/ICanBoogie/bind-prototype/actions?query=workflow%3Atest)
[![Code Quality](https://img.shields.io/scrutinizer/g/ICanBoogie/bind-prototype.svg)](https://scrutinizer-ci.com/g/ICanBoogie/bind-prototype)
[![Code Coverage](https://img.shields.io/coveralls/ICanBoogie/bind-prototype.svg)](https://coveralls.io/r/ICanBoogie/bind-prototype)
[![Packagist](https://img.shields.io/packagist/dt/icanboogie/bind-prototype.svg)](https://packagist.org/packages/icanboogie/bind-prototype)

The **icanboogie/bind-prototype** package binds [icanboogie/prototype][] to [ICanBoogie][], using its
[Autoconfig feature][]. It provides a config synthesizer for prototype methods defined in `hooks`
configuration fragments.

```php
<?php

namespace ICanBoogie;

require 'vendor/autoload.php';

$app = boot();

$app->configs['prototype']; // obtain the "prototype" config.
```





## Binding prototype methods using `hooks` config fragments

Using `hooks` configuration fragments, components may bind multiple prototype methods.

The following example demonstrates how an application may bind a `url()` method and a `url` property to instances of `ActiveRecord`:

```php
<?php

// config/prototype.php

namespace App;

$hooks = Hooks::class . '::';

return [

    Article::class . '::url' => $hooks . '::url',
    Article::class . '::get_url' => $hooks . '::url'

];
```





----------





## Requirements

The package requires PHP 7.2 or later.





## Installation

```bash
composer require icanboogie/bind-prototype
```





## Documentation

The package is documented as part of the [ICanBoogie][] framework
[documentation][]. You can generate the documentation for the package
and its dependencies with the `make doc` command. The documentation is generated in the
`build/docs` directory. [ApiGen](http://apigen.org/) is required. The directory can later be
cleaned with the `make clean` command.





## Testing

Run `make test-container` to create and log into the test container, then run `make test` to run the
test suite. Alternatively, run `make test-coverage` to run the test suite with test coverage. Open
`build/coverage/index.html` to see the breakdown of the code coverage.





## License

**icanboogie/bind-prototype** is released under the [New BSD License](LICENSE).





[documentation]: https://icanboogie.org/api/bind-prototype/4.0/

[icanboogie/prototype]:  https://github.com/ICanBoogie/Prototype
[Autoconfig feature]:    https://icanboogie.org/docs/4.0/autoconfig
[ICanBoogie]:            https://icanboogie.org
