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

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 5/29/14 10:28 PM
 */
class ContextMenuItem
{
    /**
     * @var string
     *
     * Unique string.
     */
    private $slug;

    /**
     * @var string
     *
     */
    private $label;

    /**
     * @var string
     */
    private $iconPath;

    /**
     * @var string
     */
    private $action;

    /**
     * @var array|ContextMenuItem[]
     */
    private $submenu = array();

    /**
     * Constructor.
     *
     * @param string $slug
     * @param string $label
     * @param string $action
     * @param array|ContextMenuItem[] $submenu
     */
    public function __construct($slug, $label, $action, $submenu = array())
    {
        $this->slug = $slug;
        $this->label = $label;
        $this->action = $action;
        $this->submenu = $submenu;
    }

    /**
     * Get slug.
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Get label.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Get action.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set icon path.
     *
     * @param string $iconPath
     *
     * @return ContextMenuItem
     */
    public function setIconPath($iconPath)
    {
        $this->iconPath = $iconPath;

        return $this;
    }

    /**
     * Get icon path.
     *
     * @return string
     */
    public function getIconPath()
    {
        return $this->iconPath;
    }

    /**
     * Get submenu.
     *
     * @return array|ContextMenuItem[]
     */
    public function getSubmenu()
    {
        return $this->submenu;
    }

    /**
     * Set submenu.
     *
     * @param array|ContextMenuItem[] $submenu
     *
     * @return ContextMenuItem
     */
    public function setSubmenu(array $submenu)
    {
        $this->submenu = $submenu;

        return $this;
    }

    /**
     * Add submenu item.
     *
     * @param ContextMenuItem $submenuItem
     */
    public function addSubmenuItem(ContextMenuItem $submenuItem)
    {
        $this->submenu[$submenuItem->getSlug()] = $submenuItem;
    }

    /**
     * Remove submenu item.
     *
     * @param ContextMenuItem $submenuItem
     */
    public function removeSubmenuItem(ContextMenuItem $submenuItem)
    {
        if ($this->hasSubmenuItem($submenuItem->getSlug())) {
            unset($this->submenu[$submenuItem->getSlug()]);
        }
    }

    /**
     * Check if has submenu item.
     *
     * @param string $slug
     *
     * @return bool
     */
    public function hasSubmenuItem($slug)
    {
        return isset($this->submenu[$slug]);
    }
}
