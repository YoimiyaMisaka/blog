<?php
namespace App\Entities\Admin;

use Doctrine\ORM\Mapping as ORM;
use App\Entities\BaseEntity;

/**
 * @ORM\Entity
 */
class UserEntity extends BaseEntity
{
    /**
     * @ORM\Column(type="string", length="255")
     */
    protected $email = '';

    /**
     * @ORM\Column(type="string", length="255")
     */
    protected $password = '';

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return UserEntity
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return UserEntity
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
}