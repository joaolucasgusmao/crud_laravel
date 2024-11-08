<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\User;

class DeleteUserService
{

    public function execute(String $id)
    {
        $userFound = User::find($id);
        
        if (is_null($userFound)) {
            return throw new AppError('User not found.', 400);
        }
        
        $userFound->delete();
    }
}
