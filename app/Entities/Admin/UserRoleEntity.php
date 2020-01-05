<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2020-01-05
 * Time: 11:03
 */

namespace App\Entities\Admin;

/**
 * Class UserRoleEntity
 * @package App\Entities\Admin
 * @ORM\Entity
 */
class UserRoleEntity
{
    /**
     * @ORM\Column(type="integer")
     * @var bool
     */
    protected $user_id = 0;

    /**
     * @ORM\Column(type="integer")
     * @var bool
     */
    protected $role_id = 0;

    /**
     * @return bool
     */
    public function isUserId()
    {
        return $this->user_id;
    }

    /**
     * @param bool $user_id
     * @return UserRoleEntity
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRoleId()
    {
        return $this->role_id;
    }

    /**
     * @param bool $role_id
     * @return UserRoleEntity
     */
    public function setRoleId($role_id)
    {
        $this->role_id = $role_id;
        return $this;
    }
}