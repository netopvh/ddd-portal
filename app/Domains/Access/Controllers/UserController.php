<?php

namespace App\Domains\Access\Controllers;

use App\Core\Http\Controllers\Controller;
use App\Domains\Access\Repositories\Contracts\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return view('access.users.index')
            ->with('users', $this->userRepository->all());
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {
        
    }

    public function update($id, Request $request)
    {
        
    }

    public function destroy($id)
    {
        
    }
    
}