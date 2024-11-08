<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\User;

class CreateUserService
{
    public function execute(array $data)
    {
        $userEmail = User::firstWhere('email', $data['email']);
        $userCpf = User::firstWhere('cpf', $data['cpf']);

        if (!is_null($userEmail)) {
            return throw new AppError('E-mail already exists.', 400);
        }

        if (!is_null($userCpf)) {
            return throw new AppError('CPF already exists.', 400);
        }

        return User::create($data);
    }
}
