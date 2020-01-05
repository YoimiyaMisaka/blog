<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2020-01-05
 * Time: 10:45
 */

namespace App\Entities\Admin;

use Doctrine\ORM\Mapping as ORM;
use App\Entities\BaseEntity;

/**
 * @ORM\Entity
 */
class RoleEntity extends BaseEntity
{
    /**
     * @ORM\Column(type="string", length="255")
     * @var string
     */
    protected $name = '';

    /**
     * @ORM\Column(type="integer")
     * @var bool
     */
    protected $is_super_admin = false;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return RoleEntity
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSuperAdmin()
    {
        return $this->is_super_admin;
    }

    /**
     * @param bool $is_super_admin
     * @return RoleEntity
     */
    public function setIsSuperAdmin($is_super_admin)
    {
        $this->is_super_admin = $is_super_admin;
        return $this;
    }
}