<!DOCTYPE HTML>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-app-layout>
    <x-slot name="header"> 
    <head>
        <meta charset="utf-8">
    </head>
    </x-slot>
    <body>
        <h1>単語帳</h1>
        
        <div class="category">
            <h2>Category</h2>
            <select name="word[category_id]">
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
    </body>
</x-app-layout>
</html> 
