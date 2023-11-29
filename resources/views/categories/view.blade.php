<x-app-layout>
    <h1 class="text-xl text-center">カテゴリ一覧</h1>
    <a href="/categories/create">カテゴリ追加</a>
    <div class="">
        @foreach($categories as $category)
        <div class="flex">
            <h2 class="" name="category">{{ $category->name }}</h2>
        
            <div class="">
                <a class="" href="/categories/{{ $category->id }}/edit">編集</a>
            </div>
            <div class="">
                <form action="/categories/{{ $category->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="" type="button" >削除</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    <script>
        function deleteWord(id) {
            'use strict'
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</x-app-layout>