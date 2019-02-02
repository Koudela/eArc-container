<?php
/**
 * e-Arc Framework - the explicit Architecture Framework
 * basic psr-11 compatible container blueprint
 *
 * @package earc/container
 * @link https://github.com/Koudela/eArc-container/
 * @copyright Copyright (c) 2018-2019 Thomas Koudela
 * @license http://opensource.org/licenses/MIT MIT License
 */

namespace eArc\Container\Exceptions;

use Psr\Container\ContainerExceptionInterface;
use \Exception;
use \Throwable;

/**
 * Generic container exception.
 */
class ItemException extends Exception implements ContainerExceptionInterface
{
    const MESSAGE = 'Item `%s` has thrown an exception.';

    public function __construct(string $name, int $code = 0, Throwable $previous = null)
    {
        parent::__construct(sprintf(self::MESSAGE, $name), $code, $previous);
    }
}
