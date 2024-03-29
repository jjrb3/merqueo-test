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


    /**
     * Products to prepare and supply
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getProductsToPrepareAndSupply($orderId) {
        return response()->json(Inventory::getProductsToPrepareAndSupply($orderId));
    }


    /**
     * Inventory for the following months
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getInventoryFotTheFollowingMonths() {
        return response()->json(Inventory::getInventoryForTheFollowingMonths());
    }


    /**
     * Get products to prepare
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getProductsToPrepare() {

        $products = $this->setProductsToPrepare(Inventory::getProductsToPrepare());

        return response()->json($products);
    }


    /**
     * Asiggn products to orders
     *
     * @param $orders: Object orders
     * @return array
     */
    public function setProductsToPrepare($orders) {

        return $orders->transform(function($item) {

            $item->products = Inventory::getProductsByOrders($item->orders_id);

            return $item;
        });
    }
}
