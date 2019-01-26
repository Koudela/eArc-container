<?php
/**
 * e-Arc Framework - the explicit Architecture Framework
 * basic psr-11 compatible container class/interface/exceptions
 *
 * @package earc/container
 * @link https://github.com/Koudela/eArc-container/
 * @copyright Copyright (c) 2018-2019 Thomas Koudela
 * @license http://opensource.org/licenses/MIT MIT License
 */

namespace eArc\Container\Exceptions;

use Psr\Container\NotFoundExceptionInterface;

/**
 * Item is not attached to the container.
 */
class ItemNotFoundException extends ItemException implements NotFoundExceptionInterface
{
    const MESSAGE = 'Item `%s` does not exist.';
}
