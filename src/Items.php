<?php declare(strict_types=1);
/**
 * e-Arc Framework - the explicit Architecture Framework
 * basic psr-11 compatible container blueprint
 *
 * @package earc/container
 * @link https://github.com/Koudela/eArc-container/
 * @copyright Copyright (c) 2018-2019 Thomas Koudela
 * @license http://opensource.org/licenses/MIT MIT License
 */

namespace eArc\Container;

use eArc\Container\Interfaces\ItemsInterface;
use eArc\Container\Traits\ItemsTrait;

/**
 * Generic item container.
 */
class Items implements ItemsInterface
{
    use ItemsTrait;

    public function __construct(array $items = null)
    {
        $this->initItemsTrait($items);
    }
}
