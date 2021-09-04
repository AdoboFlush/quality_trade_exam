<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index(Request $request)
    {
        $product = new Product();
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $offset = $request->offset;
        $limit = $request->limit;
        if(!empty($id)){
            $products = Product::find($id)->offset($offset)->limit($limit)->get();
        }else{
            $products = Product::get();
        }
        $response = $products->toJson(JSON_PRETTY_PRINT);
        return $response; 
    }

    public function create(Request $request)
    {
        $product = new Product();
    }

    public function store(Request $request)
    {
        $product = new Product();
    }

    public function update(Request $request)
    {
        $product = new Product();
    }

    public function destroy(Request $request)
    {
      
    }


}
