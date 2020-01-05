<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2020-01-05
 * Time: 11:06
 */

namespace App\Entities\Admin;

/**
 * Class RoleMenuEntity
 * @package App\Entities\Admin
 * @ORM\Entity
 */
class RoleMenuEntity
{
    /**
     * @ORM\Column(type="integer")
     * @var bool
     */
    protected $role_id = 0;

    /**
     * @ORM\Column(type="integer")
     * @var bool
     */
    protected $menu_id = 0;

    /**
     * @return bool
     */
    public function isRoleId()
    {
        return $this->role_id;
    }

    /**
     * @param bool $role_id
     * @return RoleMenuEntity
     */
    public function setRoleId($role_id)
    {
        $this->role_id = $role_id;
        return $this;
    }

    /**
     * @return bool
     */
    public function isMenuId()
    {
        return $this->menu_id;
    }

    /**
     * @param bool $menu_id
     * @return RoleMenuEntity
     */
    public function setMenuId($menu_id)
    {
        $this->menu_id = $menu_id;
        return $this;
    }
}