<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2020-01-05
 * Time: 10:48
 */

namespace App\Models\Admin;

use App\Entities\Admin\RoleEntity;
use App\Models\BaseModel;
use App\Models\BaseRepository;

class RoleModel extends BaseModel implements BaseRepository
{
    public function __construct()
    {
        parent::__construct();
        $this->repository = \EntityManager::getRepository(RoleEntity::class);
    }

    /**
     * @param $id
     * @return object|null|RoleEntity
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
     * @return array|RoleEntity[]
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
     * @return object|null|RoleEntity
     */
    public function getRowByWhere($wheres = array(), $order_by = null)
    {
        return $this->repository->findOneBy($wheres, $order_by);
    }
}