<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2020-01-05
 * Time: 10:57
 */

namespace App\Models\Admin;

use App\Entities\Admin\MenuEntity;
use App\Models\BaseModel;
use App\Models\BaseRepository;

class MenuModel extends BaseModel implements BaseRepository
{
    protected $repository = null;

    public function __construct()
    {
        parent::__construct();
        $this->repository = \EntityManager::getRepository(MenuEntity::class);
    }

    /**
     * @param $id
     * @return object|null|MenuEntity
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
     * @return array|MenuEntity[]
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
     * @return object|null|MenuEntity
     */
    public function getRowByWhere($wheres = array(), $order_by = null)
    {
        return $this->repository->findOneBy($wheres, $order_by);
    }
}