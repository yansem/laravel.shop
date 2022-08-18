<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Product;

class FilterController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();

        return response()->json([
            'categories' => $categories
        ]);
    }
}
