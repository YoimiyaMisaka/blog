<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2020-01-05
 * Time: 10:52
 */

namespace App\Entities\Admin;

use App\Entities\BaseEntity;

/**
 * Class MenuEntity
 * @package App\Entities\Admin
 * @ORM\Entity
 */
class MenuEntity extends BaseEntity
{
    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $module_id = 0;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $parent_id = 0;

    /**
     * @ORM\Column(type="string", length="255")
     * @var string
     */
    protected $title = '';

    /**
     * @ORM\Column(type="string", length="255")
     * @var string
     */
    protected $icon = '';

    /**
     * @ORM\Column(type="string", length="255")
     * @var string
     */
    protected $url = '';

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $num_sort = 0;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $is_show_on_sidebar = false;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $is_dev = false;

    /**
     * @return int
     */
    public function getModuleId()
    {
        return $this->module_id;
    }

    /**
     * @param int $module_id
     * @return MenuEntity
     */
    public function setModuleId($module_id)
    {
        $this->module_id = $module_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * @param int $parent_id
     * @return MenuEntity
     */
    public function setParentId($parent_id)
    {
        $this->parent_id = $parent_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return MenuEntity
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     * @return MenuEntity
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return MenuEntity
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumSort()
    {
        return $this->num_sort;
    }

    /**
     * @param int $num_sort
     * @return MenuEntity
     */
    public function setNumSort($num_sort)
    {
        $this->num_sort = $num_sort;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsShowOnSidebar()
    {
        return $this->is_show_on_sidebar;
    }

    /**
     * @param int $is_show_on_sidebar
     * @return MenuEntity
     */
    public function setIsShowOnSidebar($is_show_on_sidebar)
    {
        $this->is_show_on_sidebar = $is_show_on_sidebar;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsDev()
    {
        return $this->is_dev;
    }

    /**
     * @param int $is_dev
     * @return MenuEntity
     */
    public function setIsDev($is_dev)
    {
        $this->is_dev = $is_dev;
        return $this;
    }
}