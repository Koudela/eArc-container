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

/**
 * Item is not callable by the item class.
 */
class ItemNotCallableException extends ItemException
{
    const MESSAGE = 'Item `%s` is not callable.';
}
