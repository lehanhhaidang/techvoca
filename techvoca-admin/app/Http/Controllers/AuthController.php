<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;

use App\Services\Interface\UserServiceInterface;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected UserServiceInterface $userService;

    public function __construct (UserServiceInterface $userService){
        $this->userService = $userService;
    }
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        Auth::login($this->userService->register($request->validated()));

        $request->session()->regenerate();

        return redirect('/');
    }
}
