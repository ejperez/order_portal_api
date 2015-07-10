<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Input;

class UsersController extends Controller
{
    public function getIndex()
	{
		return User::with('role')
			->paginate(10);
	}
	
	public function postStore()
	{
		return Input::all();
	}
}
