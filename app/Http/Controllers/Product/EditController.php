<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Group;
use App\Models\Product;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Product $product)
    {
        $groups = Group::all();
        $categories = Category::all();
        $tags = Tag::all();
        $colors = Color::all();
        return view('product.edit', compact('groups','product', 'categories', 'tags', 'colors'));
    }
}
