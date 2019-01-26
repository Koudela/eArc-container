<?php declare(strict_types=1);
/**
 * e-Arc Framework - the explicit Architecture Framework
 * basic psr-11 compatible container class/interface/exceptions
 *
 * @package earc/container
 * @link https://github.com/Koudela/eArc-container/
 * @copyright Copyright (c) 2018-2019 Thomas Koudela
 * @license http://opensource.org/licenses/MIT MIT License
 */

namespace eArc\Container\Interfaces;

use eArc\Container\Exceptions\ItemNotFoundException;
use eArc\Container\Exceptions\ItemOverwriteException;
use eArc\Container\Exceptions\ItemNotCallableException;

/**
 * Basic item container interface.
 */
interface ItemsInterface extends \IteratorAggregate
{
    /**
     * Check whether an item exists.
     *
     * @param string $name
     *
     * @return bool
     */
    public function has(string $name): bool;

    /**
     * Get an item.
     *
     * @param string $name
     *
     * @return mixed
     *
     * @throws ItemNotFoundException
     */
    public function get(string $name);

    /**
     * Call a callable item.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     *
     * @throws ItemNotFoundException
     * @throws ItemNotCallableException
     */
    public function call(string $name, array $arguments = []);

    /**
     * Set an item.
     *
     * @param string $name
     * @param mixed  $item
     *
     * @throws ItemOverwriteException
     */
    public function set(string $name, $item): void;

    /**
     * Overwrite an item. Returns the old item.
     *
     * @param string $name
     * @param mixed  $item
     *
     * @return mixed
     */
    public function overwrite(string $name, $item);

    /**
     * Remove an item.
     *
     * @param string $name
     */
    public function remove(string $name): void;
}
