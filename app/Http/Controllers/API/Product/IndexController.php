<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Product\StoreRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product;


class IndexController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $products = Product::whereIn('category_id', $data['categories'])->get();
        return ProductResource::collection($products);
    }
}
