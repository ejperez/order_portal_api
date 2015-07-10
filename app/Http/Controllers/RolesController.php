<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Role;


class RolesController extends Controller
{
    public function getAll()
	{
		$roles = Role::all();
		return response()->json($roles->toArray());
	}
}
