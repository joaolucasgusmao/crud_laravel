<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\User;

class UpdateUserService
{

    public function execute(String $id, array $data)
    {
        $userFound = User::find($id);
        if (is_null($userFound)) {
            throw new AppError('User not found.', 400);
        }
        $userFound->update($data);

        return $userFound;
    }
}
