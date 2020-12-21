<?php
namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller{
    public function index(){
        $products = Products::all();
        return response()->json($products)
    }

    public function show($id){
        $product = Products::find($id);
        return response()->json($product);
    }

    public function create(Request $request){
        $product = new Products();
        $product->name = $request->name;
        $product->category = $request->category;
        $product->subcategory = $request->subcategory;
        $product->shop = $request->shop;
        $product->price = $request->price;

        $product->save();
        return response()->json("Product has been added successfully");
    }

    public function update(Request $request, $id){
        $product = Products::find($id);
        $product->name = $request->name;
        $product->category = $request->category;
        $product->subcategory = $request->subcategory;
        $product->shop = $request->shop;
        $product->price = $request->price;

        $product->save();
        return response()->json($product);
    }
}
