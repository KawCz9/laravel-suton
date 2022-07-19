<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        $product_data = Product::all();
        $data =[
            'product_data' => $product_data
        ];
        return view('dashboard_admin',$data);
    }

    public function insert(){
        $productTypes = ProductType::all();
        $data =[
            'productTypes' => $productTypes
        ];
        return view('product_insert_form',$data);
    }

    public function insert_action(Request $request){
        $newProduct = new Product();
        $newProduct -> product_type_id = $request -> input('type');
        $newProduct -> name = $request -> input('name');
        $newProduct -> scale = $request -> input('scale');
        $newProduct -> number = $request -> input('number');
        $newProduct -> case = $request -> input('case');
        $newProduct -> item = $request -> input('item');
        $newProduct -> price = $request -> input('price');
        $newProduct -> cost = $request -> input('cost');
        $newProduct -> barcode = $request -> input('barcode');
        if($request->file('image')){
            $newProduct->image = $request->file('image')->store('public/product_images');
        }

        $newProduct -> save();
        return redirect('/');
    }

    public function edit (Request $request,$id){
        $productTypes = ProductType::all();
        $product = Product::find($id);
        $data =[
            'productTypes' => $productTypes,
            'product' => $product,
        ];
        return view('product_edit_form',$data);
    }

    public function edit_action(Request $request){
        $newProduct = Product::find($request -> input('product_id'));
        $newProduct -> product_type_id = $request -> input('type');
        $newProduct -> name = $request -> input('name');
        $newProduct -> scale = $request -> input('scale');
        $newProduct -> number = $request -> input('number');
        $newProduct -> case = $request -> input('case');
        $newProduct -> item = $request -> input('item');
        $newProduct -> price = $request -> input('price');
        $newProduct -> cost = $request -> input('cost');
        $newProduct -> barcode = $request -> input('barcode');
        if($request->file('image')){
            $newProduct->image = $request->file('image')->store('public/product_images');
        }

        $newProduct -> save();

        return redirect('/');
    }

    public function delete(Request $request , $id){
        Product::destroy($id);
        return redirect('/');
    }
}
