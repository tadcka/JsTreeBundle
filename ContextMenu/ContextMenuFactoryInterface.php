<?php

/*
 * This file is part of the Tadcka package.
 *
 * (c) Tadcka <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tadcka\Bundle\JsTreeBundle\ContextMenu;

use Tadcka\JsTreeBundle\Model\ContextMenu;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 5/29/14 11:05 PM
 */
interface ContextMenuFactoryInterface
{
    /**
     * Create context menu.
     *
     * @return ContextMenu
     */
    public function create();
}
