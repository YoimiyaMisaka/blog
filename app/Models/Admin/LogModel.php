<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2020-01-05
 * Time: 11:32
 */

namespace App\Models\Admin;

use App\Entities\Admin\LogEntity;
use App\Models\BaseModel;
use App\Models\BaseRepository;

class LogModel extends BaseModel implements BaseRepository
{
    public function __construct()
    {
        parent::__construct();
        $this->repository = \EntityManager::getRepository(LogEntity::class);
    }

    /**
     * @param $id
     * @return LogEntity|object|null
     */
    public function getById($id)
    {
        $userEntity = \EntityManager::find(LogEntity::class, $id);
        return $userEntity;
    }

    /**
     * @param array $wheres
     * @param null $order_by
     * @param null $limit
     * @param null $offset
     * @return LogEntity[]
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
     * @return LogEntity|object|null
     */
    public function getRowByWhere($wheres = array(), $order_by = null)
    {
        return $this->repository->findOneBy($wheres, $order_by);
    }
}