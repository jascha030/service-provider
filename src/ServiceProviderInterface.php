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
