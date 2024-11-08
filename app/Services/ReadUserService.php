<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\User;

class ReadUserService
{
    public function execute()
    {
        
        $users = User::get();
        if ($users->isEmpty()) {
            throw new AppError('Users not found.', 400);
        }
        
        return $users;
    }
}
