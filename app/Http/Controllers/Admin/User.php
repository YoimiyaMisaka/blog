<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Admin\LogEntity;
use App\Entities\Admin\UserEntity;
use App\Models\Admin\LogModel;
use App\Models\Admin\UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class User extends Controller
{
    public function index(UserModel $userModel)
    {
        $userEntity = $userModel->getRowByWhere(['email' => 'admin@cootaa.com']);
        $userEntity->setIsDeleted(false);
        $userModel->update($userEntity);
    }
}
