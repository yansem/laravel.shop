<?php

namespace App\Service;


use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            if(isset($data['tags'])) {
                $tags = $data['tags'];
                unset($data['tags']);
            }
            if(isset($data['colors'])) {
                $colors = $data['colors'];
                unset($data['colors']);
            }
            if(isset($data['preview_image'])) {
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }
            $product = Product::create($data);
            if(isset($tags)) {
                $product->tags()->attach($tags);
            }
            if(isset($colors)) {
                $product->colors()->attach($colors);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort('500');
        }
    }

    public function update($data, $product)
    {
        try {
            DB::beginTransaction();
            if(isset($data['tags'])) {
                $tags = $data['tags'];
                unset($data['tags']);
            }
            if(isset($data['colors'])) {
                $colors = $data['colors'];
                unset($data['colors']);
            }
            if(isset($data['preview_image'])) {
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }
            $product->update($data);
            if(isset($tags)) {
                $product->tags()->sync($tags);
            }
            if(isset($colors)) {
                $product->colors()->sync($colors);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort('500');
        }
        return $product;
    }
}
