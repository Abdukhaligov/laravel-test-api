<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Validator;

class ProductController extends Controller
{
    public function save(){

    }

    public function index(){
        return Product::orderBy('created_at', 'DESC')->get();
    }


    public function create(Request $request){
        //
        $valid = Validator::make($request->all(),[
           'category' => 'required',
           'price' => 'required'
        ]);

        if($valid->fails()){
            return response()->json(['error'=>$valid->errors()],401);
        }

        $product = new Product();

        $product->name=$request->name;
        $product->category=$request->category;
        $product->price=$request->price;

        if($product->save()){
            return response()->json(['result' => "success", "msg" => "Data is saved"]);
        }


    }

    public function store(Request $request){

    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request){

        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;

        if($product->save()){
            return response()->json(['result' => "success", "msg" => "Data is updated"]);
        }else{
            return response()->json(['result' => "fail", "msg" => "something gets wrong"]);
        }
    }

    public function destroy($id)
    {
        //
        $product = Product::find($id);
        if($product->delete()){
            return response()->json(['result' => "success", "msg" => "Data is deleted"]);
        }else{
            return response()->json(['result' => "success", "msg" => "Something gets wrong"]);
        }
    }
}
