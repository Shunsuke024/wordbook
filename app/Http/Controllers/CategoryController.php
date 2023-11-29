<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function store(Request $request, Category $category)
    {
        $category->name = $request->category;
        $category->save();
        return redirect('/categories/view');
    }
    
    public function view(Category $category)
    {
         return view('categories.view')->with(['categories' => $category->get()]);
    }
    
    public function create(Category $category)
    {
        return view('categories.create')->with(['categories' => $category->get()]);
    }
    
    public function edit(Category $category)
    {
        return view('categories.edit')->with(['category' => $category]);
    }
    
    public function update(Request $request, Category $category)
    {
        $category->name = $request->category;
        $category->save();
        return redirect('/categories/create');
    }
    
    public function delete(Category $category)
    {
        $category->delete();
        return redirect('/categories/view');
    }
}