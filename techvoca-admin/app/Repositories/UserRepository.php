<?php
namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interface\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function create(array $data)
    {
        return User::create($data);
    }
}