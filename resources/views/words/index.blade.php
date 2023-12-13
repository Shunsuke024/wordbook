<x-app-layout>
    <p class="text-3xl text-center mt-5">単語一覧</p>
    <p class="text-center text-xl mb-5">隠すボタンを押すことで単語を隠せます</p>
    <form class="" action="/" method="get">
        @csrf
        <div class="flex justify-between text-center items-center mb-5 ml-5">
            <div>
                <select id="displaynumber" name="num">
                    <option value="10" @if($number == "10") selected @endif>10</option>
                    <option value="20" @if($number == "20") selected @endif>20</option>
                    <option value="30" @if($number == "30") selected @endif>30</option>
                    <option value="50" @if($number == "50") selected @endif>50</option>
                    <option value="100" @if($number == "100") selected @endif>100</option>
                </select>
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
        <a class="text-blue-600 underline decoration-blue-600 mr-5" href="/words/create">単語登録</a>
        </div>
    
    <div class="words mt-5 mb-5 py-8 bg-sky-100">
        <div class="text-center mb-5">
        <button class="bg-blue-400 hover:bg-blue-500 text-white rounded px-2 py-1 shadow-md" onclick="allhide_left()">すべて隠す</button>
        <button class="bg-blue-400 hover:bg-blue-500 text-white rounded px-2 py-1 shadow-md" onclick="allhide_right()">すべて隠す</button>
        </div>
        @foreach ($words as $i => $word)
            <div class="flex justify-center items-center">
                <button class="basisi-1/12 bg-blue-400 hover:bg-blue-500 text-white rounded px-2 py-1 shadow-md" id="button1_{{ $i }}">隠す</button>
                <div class="flex basis-2/3 items-stretch">
                    <p class="flex basis-1/2 justify-center border items-center border-2 border-blue-100 bg-white text-xl mb-px mr-px whitespace-pre-wrap" id="left_{{ $i }}">{{ $word->word_left }}</p>
                    <p class="flex basis-1/2 justify-center border items-center border-2 border-blue-100 bg-white text-xl mb-px whitespace-pre-wrap" id="right_{{ $i }}">{{ $word->word_right }}</p>
                </div>
                <button class="basisi-1/12 bg-blue-400 hover:bg-blue-500 text-white rounded px-2 py-1 shadow-md" id="button2_{{ $i }}">隠す</button>
                
                <div class="basis-1/12 text-center">
                    <a class="" href="/words/{{ $word->id }}/edit">編集</a>
                </div>
                <div class="basis-1/12 text-center">
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