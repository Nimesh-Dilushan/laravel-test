<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['id' => 1, 'name' => 'Original Beef Jerky'],
            ['id' => 2, 'name' => 'BBQ Beef Jerky'],
            ['id' => 3, 'name' => 'Sweet & Spicy Jerky'],
        ];

        return response()->json([
            'success' => true,
            'data' => $products
        ], 200);
    }
}
