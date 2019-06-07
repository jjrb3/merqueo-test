<?php

namespace App\Http\Controllers;

use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Get all enlisted products
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getLessSoldProduct($date) {

        $products = Order::getQuantitySoldProduct($date);

        dd($products->min('quantity'));

        return response()->json($products->min('quantity'));
    }
}
