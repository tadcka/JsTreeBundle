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

use Tadcka\JsTreeBundle\Model\ContextMenuItem;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 5/29/14 10:49 PM
 */
class ContextMenuFactory implements ContextMenuFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function create($slug)
    {
        return new ContextMenuItem($slug, null, null);
    }
}
