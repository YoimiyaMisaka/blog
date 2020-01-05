<?php
namespace App\Models\Admin;

use App\Entities\Admin\ModuleEntity;
use App\Models\BaseModel;
use App\Models\BaseRepository;

class ModuleModel extends BaseModel implements BaseRepository
{
    public function __construct()
    {
        parent::__construct();
        $this->repository = \EntityManager::getRepository(ModuleEntity::class);
    }

    /**
     * @param $id
     * @return object|null|ModuleEntity
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
     * @return array|ModuleEntity[]
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
     * @return object|null|ModuleEntity
     */
    public function getRowByWhere($wheres = array(), $order_by = null)
    {
        return $this->repository->findOneBy($wheres, $order_by);
    }
}