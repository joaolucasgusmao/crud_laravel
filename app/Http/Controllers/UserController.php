<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Services\CreateUserService;
use App\Services\DeleteUserService;
use App\Services\ReadUserService;
use App\Services\UpdateUserService as UpdateUserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(CreateUserRequest $request)
    {
        $createUserService = new CreateUserService();
        return $createUserService->execute($request->all());
    }

    public function read()
    {
        $readUserService = new ReadUserService();
        return $readUserService->execute();
    }

    public function update(Request $request)
    {
        $updateUserService = new UpdateUserService();
        return $updateUserService->execute($request->route(('userId')), $request->all());
    }

    public function delete(Request $request)
    {
        $deleteUserService = new DeleteUserService();
        return $deleteUserService->execute($request->route('userId'));
    }
}
