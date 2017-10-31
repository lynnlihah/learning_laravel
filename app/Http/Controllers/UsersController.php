<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function create()
    {
        return view('admin.users.create');
    }
    public function store(Request $request)
    {
        User::create($request->all());//?
        return "success";
    }
    
    public function index()
    {
        $users = [
            '0' => [
                'first_name' => 'Renato',
                'last_name' => 'Hysa'
            ],
            '1' => [
                'first_name' => 'Jessica',
                'last_name' => 'Alba'
            ]
        ];

        // 这行变了，表示 $users 这个变量会传递到view中
        return view('admin.users.index', compact('users'));
    }

    // public function index()
    // {
    //     $users = [
    //         '0' => [
    //             'first_name' => 'Renato',
    //             'last_name' => 'Hysa'
    //         ],
    //         '1' => [
    //             'first_name' => 'Jessica',
    //             'last_name' => 'Alba'
    //         ]
    //     ];
    //     return $users;
    // }
}
