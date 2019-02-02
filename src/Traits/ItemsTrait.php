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

namespace eArc\Container\Traits;

use eArc\Container\Exceptions\ItemNotCallableException;
use eArc\Container\Exceptions\ItemNotFoundException;
use eArc\Container\Exceptions\ItemOverwriteException;

/**
 * Generic item container trait. Always use the items interface, too.
 */
trait ItemsTrait
{
    /** @var mixed[] */
    protected $items;

    /**
     * @param mixed[]|null $items
     */
    protected function initItemsTrait(array $items = null)
    {
        $this->items = $items ?? [];
    }

    /**
     * @inheritdoc
     */
    public function has($name): bool
    {
        return key_exists($name, $this->items);
    }

    /**
     * @inheritdoc
     */
    public function get($name)
    {
        if (!$this->has($name)) {
            throw new ItemNotFoundException($name);
        }

        return $this->items[$name];
    }

    /**
     * @inheritdoc
     */
    public function call(string $name, array $arguments = [])
    {
        if (!$this->has($name)) {
            throw new ItemNotFoundException($name);
        }

        if (!is_callable($this->items[$name])) {
            throw new ItemNotCallableException($name);
        }

        return ($this->items[$name])(...$arguments);
    }

    /**
     * @inheritdoc
     */
    public function set(string $name, $item): void
    {
        if ($this->has($name)) {
            throw new ItemOverwriteException($name);
        }

        $this->items[$name] = $item;
    }

    /**
     * @inheritdoc
     */
    public function overwrite(string $name, $item)
    {
        $oldItem = $this->items[$name] ?? null;
        $this->items[$name] = $item;

        return $oldItem;
    }

    /**
     * @inheritdoc
     */
    public function remove(string $name): void
    {
        unset($this->items[$name]);
    }

    /**
     * @inheritdoc
     */
    public function getIterator()
    {
        foreach ($this->items as $name => $item) {
            yield $name => $item;
        }
    }
}
