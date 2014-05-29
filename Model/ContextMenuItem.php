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
 * @since 5/29/14 10:28 PM
 */
class ContextMenuItem
{
    /**
     * Unique string.
     *
     * @var string
     */
    private $name;

    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("label")
     */
    private $label;

    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("icon")
     */
    private $iconPath;

    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("action")
     */
    private $action;

    /**
     * @var ContextMenu
     *
     * @Type("Tadcka\JsTreeBundle\Model\ContextMenuItem")
     * @SerializedName("submenu")
     */
    private $submenu;

    /**
     * Constructor.
     *
     * @param string $name
     * @param string $label
     * @param string $action
     */
    public function __construct($name, $label, $action)
    {
        $this->name = $name;
        $this->label = $label;
        $this->action = $action;
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
     * Get action.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set submenu.
     *
     * @param ContextMenu $submenu
     *
     * @return ContextMenuItem
     */
    public function setSubmenu(ContextMenu $submenu)
    {
        $this->submenu = $submenu;

        return $this;
    }

    /**
     * Get submenu.
     *
     * @return ContextMenu
     */
    public function getSubmenu()
    {
        return $this->submenu;
    }

    /**
     * Get unique name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
