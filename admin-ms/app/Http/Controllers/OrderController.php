<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Models\Order;


class OrderController extends Controller
{
    public function __construct(
        private UserService $userService
    ) { }

    public function index()
    {
        return OrderResource::collection(Order::with('orderItems')->get());
    }

}
