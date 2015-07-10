<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Order;

class OrdersController extends Controller
{   
	public function getIndex()
	{
		$orders = Order::all()->take(15);
		return response()->json($orders->toArray());
	}
	
	public function postStore()
	{
		
	}
}
