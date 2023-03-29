<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ModelsPackage\Laravel\Models\Product;
use ModelsPackage\Laravel\Models\ProductVariant;

class TestController extends Controller
{
    //
    public function __invoke()
    {
        $product = Product::with(['variants', 'variants.variantAttributeValues'])->find(1);
        dd($product->variants);

        // $variants = ProductVariant::find(1);
        // dd($variants->load('variantAttributeValues'));
        return view('welcome');
    }
}
