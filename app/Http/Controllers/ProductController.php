<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Traits\FileStorage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use FileStorage;

    public function store(Request $request)
    {
        Product::create($request->except('photo') + [
            'photo' => $this->storeFile('uploads/products', $request->file('photo'))
        ]);
    }
}
