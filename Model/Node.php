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
 * @since 4/12/14 10:18 PM
 */
class Node
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $text;

    /**
     * @var bool|array|Node[]
     */
    private $children;

    /**
     * @var string
     */
    private $icon;

    /**
     * Constructor.
     *
     * @param int $id
     * @param string $text
     * @param bool|array|Node[] $children
     * @param null|string $icon
     */
    public function __construct($id, $text, $children, $icon = null)
    {
        $this->id = $id;
        $this->text = $text;
        $this->children = $children;
        $this->icon = $icon;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Get children.
     *
     * @return bool|array|Node[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Get icon.
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }
}
