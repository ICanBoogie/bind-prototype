# bind-prototype

[![Release](https://img.shields.io/packagist/v/icanboogie/bind-prototype.svg)](https://packagist.org/packages/icanboogie/bind-prototype)
[![Build Status](https://img.shields.io/travis/ICanBoogie/bind-prototype.svg)](http://travis-ci.org/ICanBoogie/bind-prototype)
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

The package requires PHP 5.6 or later.





## Installation

The recommended way to install this package is through [Composer](http://getcomposer.org/):

```
$ composer require icanboogie/bind-prototype
```





### Cloning the repository

The package is [available on GitHub](https://github.com/ICanBoogie/bind-prototype), its repository
can be cloned with the following command line:

	$ git clone https://github.com/ICanBoogie/bind-prototype.git





## Documentation

The package is documented as part of the [ICanBoogie][] framework
[documentation][]. You can generate the documentation for the package
and its dependencies with the `make doc` command. The documentation is generated in the
`build/docs` directory. [ApiGen](http://apigen.org/) is required. The directory can later be
cleaned with the `make clean` command.





## Testing

The test suite is ran with the `make test` command. [PHPUnit](https://phpunit.de/) and
[Composer](http://getcomposer.org/) need to be globally available to run the suite. The command
installs dependencies as required. The `make test-coverage` command runs test suite and also
creates an HTML coverage report in "build/coverage". The directory can later be cleaned with
the `make clean` command.

The package is continuously tested by [Travis CI](http://about.travis-ci.org/).

[![Build Status](https://img.shields.io/travis/ICanBoogie/bind-prototype.svg)](https://travis-ci.org/ICanBoogie/bind-prototype)
[![Code Coverage](https://img.shields.io/coveralls/ICanBoogie/bind-prototype.svg)](https://coveralls.io/r/ICanBoogie/bind-prototype)





## License

**icanboogie/bind-prototype** is licensed under the New BSD License - See the [LICENSE](LICENSE) file for details.





[documentation]: https://icanboogie.org/api/bind-prototype/4.0/

[icanboogie/prototype]:  https://github.com/ICanBoogie/Prototype
[Autoconfig feature]:    https://icanboogie.org/docs/4.0/autoconfig
[ICanBoogie]:            https://icanboogie.org
