<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;
use App\Models\Category;

class WordController extends Controller
{
    public function index(Category $category)
    {
        return view('words.index')->with(['categories' => $category->get()]);
    }
}
