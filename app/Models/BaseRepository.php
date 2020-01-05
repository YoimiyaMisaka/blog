<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2020-01-05
 * Time: 10:37
 */

namespace App\Models;


interface BaseRepository
{
    public function getById($id);

    public function find($wheres = array(), $order_by = null, $limit = null, $offset = null);

    public function getRowByWhere($wheres = array(), $order_by = null);
}