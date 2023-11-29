<x-app-layout>
    <p class="text-3xl text-center mt-5">単語一覧</p>
    <p class="text-center text-xl mb-5">非表示ボタンを押すことで単語を非表示にできます</p>
    <form class="" action="/" method="get">
        @csrf
        <div class="flex justify-around mt-5">
            <div class="flex items-center mr-96">
                <p>表示数：</p>
                <select id="displaynumber" name="num">
                    <option value="10" @if($number == "10") selected @endif>10</option>
                    <option value="20" @if($number == "20") selected @endif>20</option>
                    <option value="30" @if($number == "30") selected @endif>30</option>
                    <option value="50" @if($number == "50") selected @endif>50</option>
                    <option value="100" @if($number == "100") selected @endif>100</option>
                </select>
            </div>
            <div></div>
        </div>
        <div class="flex justify-around text-center items-center mb-5 ml-5">
            <div>
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
                
                <input class="shadow-inner" type="text" name="keyword" value="{{ $keyword }}">
                <input class="bg-blue-400 hover:bg-blue-500 text-white rounded px-2 py-1 shadow-lg" type="submit" value="検索">
            </div>
    </form>
        <a class="text-blue-600 underline decoration-blue-600 mr-20" href="/words/create">単語登録</a>
        </div>
    
    <div class="words mt-5 mb-5 py-8 bg-sky-100">
        <div class="text-center mb-5">
        <button class="bg-blue-400 hover:bg-blue-500 text-white rounded px-2 py-1 shadow-md" onclick="allhide_left()">すべて非表示</button>
        <button class="bg-blue-400 hover:bg-blue-500 text-white rounded px-2 py-1 shadow-md" onclick="allhide_right()">すべて非表示</button>
        </div>
        @foreach ($words as $i => $word)
            <div class="flex justify-center items-center">
                <button class="bg-blue-400 hover:bg-blue-500 text-white rounded px-2 py-1 ml-32 shadow-md" id="button1_{{ $i }}">非表示</button>
                <div class="flex basis-1/2 items-stretch">
                    <p class="flex justify-center basis-1/2 border items-center border-2 border-blue-100 bg-white text-xl mb-px mr-px whitespace-pre-wrap" id="left_{{ $i }}">{{ $word->word_left }}</p>
                    <p class="flex justify-center basis-1/2 border items-center border-2 border-blue-100 bg-white text-xl mb-px whitespace-pre-wrap" id="right_{{ $i }}">{{ $word->word_right }}</p>
                </div>
                <button class="bg-blue-400 hover:bg-blue-500 text-white rounded px-2 py-1 shadow-md" id="button2_{{ $i }}">非表示</button>
                
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
    
    <div class="text-white mt-5 mb-5">
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