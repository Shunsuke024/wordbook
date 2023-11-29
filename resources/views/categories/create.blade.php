<x-app-layout>
    <h1 class="text-xl text-center">カテゴリ一覧</h1>
    <div class="">
        <form action="/categories" method="post">
            @csrf
            <input type="text" name="category">
            <input class="bg-blue-400 hover:bg-blue-500 text-white rounded px-2 py-1" type="submit" value="登録"/>
        </form>
        
        @foreach($categories as $category)
        <div class="flex">
            <h2 class="" name="category">{{ $category->name }}</h2>
        </div>
        @endforeach
    </div>
</x-app-layout>