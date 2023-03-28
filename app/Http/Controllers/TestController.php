<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ModelsPackage\Laravel\Models\Product;

class TestController extends Controller
{
    //
    public function __invoke()
    {
        $product = Product::find(1)->load('variants');
        dd($product);
        return view('welcome');
    }
}
