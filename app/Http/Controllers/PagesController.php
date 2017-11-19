<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;

class PagesController extends Controller
{
	public function index(){
	    // 判断view是否存在
	    if(View::exists('pages.index'))
	    	// return view('pages.index');
	        // return view('pages.index', ['text' => '<b>Laravel</b>', 'name' => 'Nicole']);
	        return view('pages.index')
                ->with('text', '<b>Laravel</b>')
                ->with('name', 'Nicole');
	    else
	    	return 'No view available';
	}

	public function blade()
	{
		return view('pages.bladetest');
	}
}