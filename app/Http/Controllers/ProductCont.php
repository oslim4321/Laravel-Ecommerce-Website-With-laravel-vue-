<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductCont extends Controller
{
    public function getAllProd()
    {
        $prod = Product::all();
        return response()->json([
            'product' => $prod,
            'success' => true,
        ]);
    }
}
// "Method App\\Http\\Controllers\\ProductCont::getAllProd does not exist."
