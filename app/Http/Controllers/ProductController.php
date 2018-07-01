<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    public function index()
    {
      $products = Product::all();

      return view('products.index', compact('products'));
    }

    public function create()
    {
      return view('products.create');
    }

    public function store()
    {
      $product = new Product;

      $product->title = request('title');
      $product->description = request('description');
      $product->price = request('price');

      $product->save();

      return redirect()->home();

    }
}
