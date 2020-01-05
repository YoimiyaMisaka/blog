<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2020-01-05
 * Time: 00:23
 */

namespace App\Models;
use App\Entities\BaseEntity;
use App\Libraries\Utils;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class BaseModel
{
    use Notifiable;

    protected $repository = null;

    public function __construct()
    {
    }

    public static function getInstance()
    {
        return new static();
    }

    /**
     * @param BaseEntity $entity
     * @return bool
     */
    public function insert(BaseEntity $entity)
    {
        try {
            \EntityManager::persist($entity);
            \EntityManager::flush();
        } catch (\Doctrine\ORM\OptimisticLockException $exception) {
            Utils::log(request()->fullUrl(), array('error_code' => $exception->getCode(), 'error_msg' => $exception->getMessage()), 'insert exception');
            return false;
        }

        return true;
    }

    /**
     * @param BaseEntity $entity
     * @return bool
     */
    public function update(BaseEntity $entity)
    {
        try {
            \EntityManager::flush($entity);
        } catch (\Doctrine\ORM\OptimisticLockException $exception) {
            Utils::log(request()->fullUrl(), array('error_code' => $exception->getCode(), 'error_msg' => $exception->getMessage()), 'update exception');
            return false;
        }

        return true;
    }

    /**
     * @param BaseEntity $entity
     * @return bool
     */
    public function remove(BaseEntity $entity)
    {
        try {
            \EntityManager::remove($entity);
            \EntityManager::flush();
        } catch (\Doctrine\ORM\OptimisticLockException $exception) {
            Utils::log(request()->fullUrl(), array('error_code' => $exception->getCode(), 'error_msg' => $exception->getMessage()), 'remove exception');
            return false;
        }

        return true;
    }

    /**
     * @param BaseEntity $entity
     * @return bool
     */
    public function softDelete(BaseEntity $entity)
    {
        try {
            $entity->setIsDeleted(true);
            \EntityManager::flush($entity);
        } catch (\Doctrine\ORM\OptimisticLockException $exception) {
            Utils::log(request()->fullUrl(), array('error_code' => $exception->getCode(), 'error_msg' => $exception->getMessage()), 'soft delete exception');
            return false;
        }

        return true;
    }
}