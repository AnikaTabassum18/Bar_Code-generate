<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index()
    {
      return view('product');
    }
    public function show_barcode()
    {
        $products = product::all();
        return view('index',compact('products'));
    }
    public function create_barcode()
    {
      return view('create');
    }
    public function store_barcode(Request $request)
    {
      $number = mt_rand(10000000, 99999999);
      if($this->productCodeExists($number))
      {
        $number = mt_rand(10000000, 99999999);
      }
      $request['product_code'] = $number;
      Product::create($request->all());
      return redirect('/show-barcode');
    }
    public function productCodeExists($number){
      return Product::whereProductCode($number)->exists();
    }
}
