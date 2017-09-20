<?php

namespace App\Domains\Access\Controllers;

use App\Core\Http\Controllers\Controller;
use App\Domains\Access\Repositories\Contracts\RoleRepository;
use App\Domains\Access\Repositories\Contracts\UserRepository;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class UserController extends Controller
{

    public $userRepository;
    public $roleRepository;

    public function __construct(UserRepository $userRepository, RoleRepository $roleRepository)
    {
        $this->middleware('auth');
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }

    public function index()
    {
        return view('access.users.index')
            ->with('users', $this->userRepository->all());
    }

    public function create()
    {

        return view('access.users.add')
            ->with('roles', $this->roleRepository->all());
    }

    public function store(Request $request)
    {
        dd($request->all());
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