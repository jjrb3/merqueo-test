<?php

namespace App\Http\Controllers;

use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Get less sold product
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getLessSoldProduct($date) {
        return response()->json(Order::getLessSoldProduct($date));
    }
}
