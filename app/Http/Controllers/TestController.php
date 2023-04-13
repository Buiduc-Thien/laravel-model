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
        return view('welcome');
    }
}
