# Service Provider

Copy of [container-interop/service-providers](https://github.com/container-interop/service-provider), which seems unmaintained, but states that is still a work in progress.
Because of this, I made a copy with some slight edits, to use in personal projects.

## Installation

```sh
composer require jascha030/service-provider
```

## The interface

The interface is pretty self explainitory, read the README.md of [container-interop/service-providers](https://github.com/container-interop/service-provider) for more info.

```php
<?php

declare(strict_types=1);

namespace Jascha030\DI\ServiceProvider;

use Closure;
use Psr\Container\ContainerInterface;

/**
 * A service provider provides entries to a container.
 *
 * @see ContainerInterface
 */
interface ServiceProviderInterface
{
    /**
     * @return iterable<class-string|int|string,callable|Closure>
     */
    public function getFactories(): iterable;

    /**
     * @return iterable<class-string|int|string,callable|Closure>
     */
    public function getExtensions(): iterable;
}
```
