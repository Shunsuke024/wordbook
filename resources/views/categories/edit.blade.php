<x-app-layout>
    
    <h1 class="text-3xl text-center mt-5 mb-5">カテゴリを編集できます</h1>
    <div class="text-center">
        <form action="/categories/{{ $category->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="text-center mt-5 mb-5">
                <input type="text" name='category' value="{{ $category->name }}">
            </div>
            <input class="bg-blue-400 hover:bg-blue-500 text-white rounded px-2 py-1" type="submit" value="保存">
        </form>
    </div>
    
</x-app-layout>