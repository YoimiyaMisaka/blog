<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2020-01-05
 * Time: 10:59
 */

namespace App\Entities\Admin;

use App\Entities\BaseEntity;

/**
 * Class ModuleEntity
 * @package App\Entities\Admin
 * @ORM\Entity
 */
class ModuleEntity
{
    /**
     * @ORM\Column(type="string", length="255")
     * @var string
     */
    protected $name = '';

    /**
     * @ORM\Column(type="string", length="255")
     * @var string
     */
    protected $icon = '';

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $num_sort = 0;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ModuleEntity
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return ModuleEntity
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
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
     * @return ModuleEntity
     */
    public function setNumSort($num_sort)
    {
        $this->num_sort = $num_sort;
        return $this;
    }
}