<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ShowController extends Controller
{
    public function __invoke(Product $product)
    {
        $category = $product->category;
        $tags = $product->tags;
        $colors = $product->colors;
        return view('product.show', compact('product', 'category', 'tags', 'colors'));
    }
}
