<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2020-01-05
 * Time: 11:05
 */

namespace App\Models\Admin;

use App\Entities\Admin\UserRoleEntity;
use App\Models\BaseModel;
use App\Models\BaseRepository;

class UserRoleModel extends BaseModel implements BaseRepository
{
    public function __construct()
    {
        parent::__construct();
        $this->repository = \EntityManager::getRepository(UserRoleEntity::class);
    }

    /**
     * @param $id
     * @return object|null|UserRoleEntity
     */
    public function getById($id)
    {
        return $this->repository->find($id);
    }

    /**
     * @param array $wheres
     * @param null $order_by
     * @param null $limit
     * @param null $offset
     * @return array|UserRoleEntity[]
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
     * @return object|null|UserRoleEntity
     */
    public function getRowByWhere($wheres = array(), $order_by = null)
    {
        return $this->repository->findOneBy($wheres, $order_by);
    }
}