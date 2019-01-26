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

/**
 * Item of the container is overwritten unintentionally.
 */
class ItemOverwriteException extends ItemException
{
    const MESSAGE = 'Item name `%s` is used already. '
        .'If you want to overwrite an item use the overwrite method instead.';
}
