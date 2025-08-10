<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        //
        try{
             return response()->json(Category::all());
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
            'description'=>'required|max:500'
        ]);
         return response()->json([Category::create($request->all()),"message"=>"data saved successfully"],200);
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
            $ci=Category::find($id);
            return response()->json($ci);
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
                    $ci=Category::find($id);
                    
        $request->validate([
            'name'=>'required|string|max:50',
            'description'=>'required|max:500'
        ]);
         return response()->json([$ci->update($request->all()),"message"=>"data updated successfully"],200);
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
         $ci=Category::find($id);
        
         return response()->json([ $ci->delete(),"message"=>"data deleted successfully"],200);
        }
        catch(\Throwable $e){
            return response()->json(["message"=>"data not deleted"],422);
        }
    }
}