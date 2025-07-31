<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try{
             return response()->json(Product::all());
        }catch(\Throwable $e){
            return response(["message"=>"internal server error"],500);
        }
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try{
        $request->validate([
            'name'=>'required|string|max:50',
            'price'=>'required|numeric',
            'discount'=>'required|numeric',
            'quantity'=>'required|numeric'
        ]);
         return response()->json([Product::create($request->all()),"message"=>"data saved successfully"],200);
    }
    catch(\Throwable $e){
         return response()->json(["message"=>"data not saved"],422);
        
    }
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        try{
            $pi=Product::find($id);
            return response()->json($pi);
        }
        catch(\Throwable $e){
            return response()->json(["message"=>"data not found"],404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
                try{
                    $pi=Product::find($id);
                    
        $request->validate([
            'name'=>'required|string|max:50',
            'price'=>'required|numeric',
            'discount'=>'required|numeric',
            'quantity'=>'required|numeric'
        ]);
         return response()->json([$pi->update($request->all()),"message"=>"data updated successfully"],200);
    }
    catch(\Throwable $e){
         return response()->json(["message"=>"data not updated"],422);
        
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try{
         $pi=Product::find($id);
        
         return response()->json([ $pi->delete(),"message"=>"data deleted successfully"],200);
        }
        catch(\Throwable $e){
            return response()->json(["message"=>"data not deleted"],422);
        }
    }
}