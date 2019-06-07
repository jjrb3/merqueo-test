<?php

namespace App\Http\Controllers;

use App\Models\Inventory;

class InventoryController extends Controller
{
    /**
     * Get all enlisted products
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getEnlistedProdutcs() {
        return response()->json(Inventory::getEnlistedProducts());
    }
}
