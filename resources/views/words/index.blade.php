<x-app-layout>
    <p class="text-2xl text-center mt-5 mb-5">単語帳</p>
        
    <div class="flex justify-around text-center items-center mt-5 mb-5">
        <form class="text-center" action="/" method="get">
            @csrf
            
            <select id="category" name="categories">
                <option value="all"  >すべて</option>
                @foreach($categories as $category)
                    <option  name="{{ $category->name }}" value="{{ $category->id }}" @if($category_id == $category->id) selected @endif>{{ $category->name }}</option>
                @endforeach
            </select>
        
            <select id="order" name="order">
                <option value="DESC" @if($order_view == "DESC") selected @endif>新しい順</option>
                <option value="ASC" @if($order_view == "ASC") selected @endif>古い順</option>
            </select>
            
            <input type="text" name="keyword" value="{{ $keyword }}">
            <input class="bg-blue-400 hover:bg-blue-500 text-white rounded px-2 py-1" type="submit" value="検索">
            
        </form>
        
        <a class="text-blue-600 underline decoration-blue-600 mr-20" href="/words/create">単語登録</a>
    </div>
    
    <div class="words mt-5 mb-5">
        @foreach ($words as $i => $word)
            <div class="flex justify-center items-center">
                <p class="basis-1/4 border border-2 border-blue-100 bg-white text-xl text-center ml-24 mb-px mr-px whitespace-pre-wrap" >{{ $word->English }}</p>
                <p class="basis-1/4 border border-2 border-blue-100 bg-white text-xl text-center mb-px whitespace-pre-wrap" id="right_{{ $i }}">{{ $word-> Japanese }}</p>
                
                <button class="" id="button_{{ $i }}">非表示</button>
                
                <div class="basis-1/10 ml-16">
                    <a class="" href="/words/{{ $word->id }}/edit">編集</a>
                </div>
                <div class="basis-1/10">
                <form action="/words/{{ $word->id }}" id="form_{{ $word->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="" type="button" onclick="deleteWord({{ $word->id }})">削除</button>
                </form>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center mt-5 mb-5">
        {{$words->appends(request()->query())->links()}}
    </div>
    <script src="{{ asset('/js/hidden.js') }}"></script>
    <script>
        function deleteWord(id) {
            'use strict'
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</x-app-layout>