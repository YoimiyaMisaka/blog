<?php
namespace App\Models\Admin;

use App\Entities\Admin\UserEntity;
use App\Models\BaseModel;
use App\Models\BaseRepository;

class UserModel extends BaseModel implements BaseRepository
{

    public function __construct()
    {
        parent::__construct();
        $this->repository = \EntityManager::getRepository(UserEntity::class);
    }

    /**
     * @param $id
     * @return UserEntity|object|null
     */
    public function getById($id)
    {
        $userEntity = \EntityManager::find(UserEntity::class, $id);
        return $userEntity;
    }

    /**
     * @param array $wheres
     * @param null $order_by
     * @param null $limit
     * @param null $offset
     * @return UserEntity[]
     */
    public function find($wheres = array(), $order_by = null, $limit = null, $offset = null)
    {
        if ($wheres) {
            $result = $this->repository->findBy($wheres, $order_by, $limit, $offset);
        } else {
            $result = $this->repository->findAll();
        }
        return $result;
    }

    /**
     * @param array $wheres
     * @param null $order_by
     * @return UserEntity|object|null
     */
    public function getRowByWhere($wheres = array(), $order_by = null)
    {
        return $this->repository->findOneBy($wheres, $order_by);
    }
}