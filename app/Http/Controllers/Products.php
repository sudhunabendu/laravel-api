<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class Products extends Controller
{

    public function list()
    {

        $product = Product::all();
        echo "<pre>";
        print_r($product);
        echo "</pre>";
    }


    public function save(Request $req)
    {
        $pro = new Product;
        $pro->name = $req->name;
        $pro->category = $req->category;
        $pro->price = $req->price;
        if ($pro->save()) {
            return ["Result" => "product has been save"];
        } else {
            return ["Result" => "Not save"];
        }
    }

    public function update(Request $req){
        $pro = Product::find($req->id);
        $pro->name = $req->name;
        $pro->category = $req->category;
        $pro->price = $req->price;
        if ($pro->save()) {
            return ["result" => "product has been updated"];
        } else {
            return ["result" => "not updated"];
        }
    }
}
