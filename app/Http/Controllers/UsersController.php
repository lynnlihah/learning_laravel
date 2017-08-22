<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index()
    {
        $users = [
            '0' => [
                'first_name' => 'Renato',
                'last_name' => 'Hysa'
            ],
            '1' => [
                'first_name' => 'Jessica',
                'last_name' => 'Al'
            ]
        ];
        // return $users;
        // 这行变了，表示 $users 这个变量会传递到view中
        return view('admin.users.index', compact('users'));
    }
}
