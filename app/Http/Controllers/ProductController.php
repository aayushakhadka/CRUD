<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Traits\FileStorage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use FileStorage;

    public function index(Request $request)
    {
        $products = Product::orderBy('id', 'asc');

        if ($request->query('category')) {
            $category = Category::where('name', $request->query('category'))->first();
            $products = $products->where('category_id', $category->id);
        }

        if ($request->query('pricelessthan')) {
            $products = $products->where('price', '<=', (int)$request->query('pricelessthan'));
        }

        $products = $products->get();

        return view('products.index', compact('products'));
    }

    public function store(Request $request)
    {
        Product::create($request->except('photo') + [
            'photo' => $this->storeFile('uploads/products', $request->file('photo'))
        ]);
        return redirect('/products');
    }
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product =  Product::find($id);
        $product->update($request->all());
    }
}
