<?php

namespace App\Services;

use App\Services\Interface\UserServiceInterface;
use App\Repositories\Interface\UserRepositoryInterface;

 class UserService implements UserServiceInterface
 {
    protected UserRepositoryInterface $userRepository;
    
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register(array $data)
    {
        
        return $this->userRepository->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
 }



