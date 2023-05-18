<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::where('parent_id', 0)->get();
        return view('categories',compact('categories'));
    }

    public function getCategory($category_id)
    {
        
        $data = Category::where('parent_id',$category_id)
                              ->with('subcategories')
                              ->get();
        return response()->json(['data' => $data]);
    }
}
