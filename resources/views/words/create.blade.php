<x-app-layout>
    <p class="text-center text-3xl mt-5">登録したい単語を入力</p>
    <p class="text-center text-xl">下の追加・削除ボタンで入力欄を追加・削除できます(20個まで)</p>
    <p class="text-center text-xl text-red-600">＊空欄は作らないでください</p>
    
    
    <form action="/words" method="POST">
        @csrf
        <div class="flex justify-around items-center mt-5 mb-5">
                <div class="flex items-center">
                    <h2 class="text-xl">カテゴリ</h2>
                    <select class="" id="category" name="words1[category_id]">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            <input class="bg-blue-400 hover:bg-blue-500 text-white rounded px-2 py-1 shadow-lg" type="submit" value="登録"/>
        </div>
        
        <div id="main" class="text-center mb-5 py-8 bg-sky-100">
            <div id="text" class="pt-2.5">
                <textarea class="left" id="left_1" name="words1[word_left]" style="overflow:hidden">{{ old('words1.word_left') }}</textarea>
                <textarea class="right" id="right_1" name="words1[word_right]" style="overflow:hidden">{{ old('words1.word_right') }}</textarea>
            </div>
        </div>
        <div class="text-center">
            <p class="text-red-600">{{ $errors->first() }}</p>
        </div>
    </form>
    
    <p id="max_box" style="display:none" class="text-center text-red-600">入力欄が20個に達しました</p>
    <div class="flex justify-around mt-5 mb-5">
        <div class="flex items-center">
        <button class="bg-blue-400 hover:bg-blue-500 text-white rounded px-2 py-1 mr-2 ml-5 shadow-lg" id="add_btn" name="add" onclick="addBox()">追加</button>
        <button class="bg-blue-400 hover:bg-blue-500 text-white rounded px-2 py-1 shadow-lg" id="delete_btn" name="delete" onclick="delBox()">削除</button>
        </div>
        
        <div></div>
    </div>
    <div class="footer underline text-blue-600">
        <a href="/">一覧に戻る</a>
    </div>
    <script src="{{ asset('/js/add_delete.js') }}"></script>
</x-app-layout>