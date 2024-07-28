<?php

namespace App\Orders\Http\Controller;

use App\Orders\Models\Order;

class OrderController
{
    public function index()
    {
        Order::whereId(1)->markAsCompleted();
    }
}
