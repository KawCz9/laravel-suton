<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function type(){
        $type_data = ProductType::all();
        $data = [
            'type_data' => $type_data
        ];
        return view('product_type',$data);
    }

    public function insert(){
        return view('product_insert_type');
    }

    public function insert_action (Request $request){
        $newType = new ProductType();
        $newType -> name = $request -> input('typename');
        $newType -> save();
        return redirect('/type');
    }
}
