<?php

namespace App\Http\Controllers;

use App\Models\Product as ModelsProduct;
use Illuminate\Http\Request;

class Product extends Controller
{
    public function getAllProd()
    {
        $prod = ModelsProduct::all();
        return response()->json([
            'product' => $prod,
            'success' => true,
        ]);
    }
}
