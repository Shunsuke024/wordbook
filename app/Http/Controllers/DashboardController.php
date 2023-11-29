<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;

class DashboardController extends Controller
{
    public function dashboard(Word $word)
    {
        $query = Word::query();
        $query->where('user_id', \Auth::id());
        $words = $query;
        return view('/dashboard')->with(['word' => $words->orderBy('updated_at', 'DESC')->take(10)->get()]);
    }
}
