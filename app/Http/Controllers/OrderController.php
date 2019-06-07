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


    /**
     * Get most selled product
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMostSelledProduct($date) {
        return response()->json(Order::getMostSelledProduct($date));
    }
}
