<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class WordController extends Controller
{
    public function index(Request $request, Word $word, Category $category)
    {
        $keyword = $request->input('keyword');
        $category_id = $request->categories;
        $order = $request->order;
        $num = $request->num;
        
        $number = "10";
        $sort_view = "id";
        $order_view = "DESC";
        
        $query = Word::query();
        $query->where('user_id', Auth::id());
        
        if(!empty($num)){
            $number = $num;
        }
        
        if($order=="ASC"){
            $order_view = "ASC";
        }
        
        if($category_id != "all"){
            if(!empty($category_id)){
                $query->where('category_id', $category_id);
            }
        }
        
        if(!empty($keyword)) {
            $query->where('word_left', 'LIKE', "%{$keyword}%")
             ->orWhere('word_right', 'LIKE', "%{$keyword}%");
        }
        
        $words = $query->with('category')->orderBy($sort_view,  $order_view)->paginate($number);
        
        return view('words.index')->with([
            'words' => $words, 'categories' => $category->get(),
            'keyword' => $keyword, 'category_id' => $category_id, 'order_view' => $order_view, 'number' => $number
        ]);
    }
    
    public function store(Request $request, Word $word)
    {
        $requests = $request->all();
        array_splice($requests, 0, 1);
        
        foreach ($requests as $input){
            $input['user_id'] = Auth::id();
            $word = new Word();
            $word->fill($input);
            
            if(!empty($word->word_left || $word->word_rifht)){
                $word->save();
            }else{
                unset($word);
            }
        }
        return redirect('/');
    }
    
    public function search(Word $word)
    {
        return view('words.search');
    }
    
    public function edit(Word $word, Category $category)
    {
        return view('words.edit')->with(['word' => $word]);
    }
    
    public function update(Request $request, Word $word)
    {
        $input_word = $request['word'];
        $word->fill($input_word)->save();
        
        return redirect('/');
    }
    
    public function delete(Word $word)
    {
        $word->delete();
        return redirect('/');
    }
    
    public function create(Category $category)
    {
        return view('words.create')->with(['categories' => $category->get()]);
    }
    
}
