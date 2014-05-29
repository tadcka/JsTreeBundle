<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\JsTreeBundle\Model;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 5/29/14 10:27 PM
 */
class ContextMenu
{
    /**
     * @var array|ContextMenuItem[]
     *
     * @Type("array<Tadcka\JsTreeBundle\Model\ContextMenuItem>")
     * @SerializedName("items")
     */
    private $items = array();

    /**
     * Add context menu item.
     *
     * @param ContextMenuItem $item
     */
    public function addItem(ContextMenuItem $item)
    {
        $this->items[$item->getName()] = $item;
    }

    /**
     * Remove context menu item.
     *
     * @param ContextMenuItem $item
     */
    public function removeItem(ContextMenuItem $item)
    {
        if ($this->hasItem($item)) {
            unset($this->items[$item->getName()]);
        }
    }

    /**
     * Check or context menu has item by name.
     *
     * @param ContextMenuItem $item
     *
     * @return bool
     */
    public function hasItem(ContextMenuItem $item)
    {
        return isset($this->items[$item->getName()]);
    }

    /**
     * Set items.
     *
     * @param array|ContextMenuItem[] $items
     *
     * @return ContextMenu
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Get items.
     *
     * @return array|ContextMenuItem[]
     */
    public function getItems()
    {
        return $this->items;
    }
}
