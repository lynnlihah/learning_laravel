<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', 'UsersController@index');

// Route::get('/users', function() {
// 	// 这里定义了$users这个变量，内容是个数组
// 	$users = [
//             '0' => [
//                 'first_name' => 'Renato',
//                 'last_name' => 'Hysa'
//             ],
//             '1' => [
//                 'first_name' => 'Jessica',
//                 'last_name' => 'Alba'
//             ]
//         ];
//     return $users;
// });

