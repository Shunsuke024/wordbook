<x-app-layout>
    <h1 class="text-2xl text-center mt-5 mb-5">単語帳</h1>
    
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
            <input class="bg-blue-400 hover:bg-blue-500 text-white rounded px-2 py-1" type="submit" value="登録"/>
        </div>
        
        <p class="text-center text-xl">ここに登録したい単語を入力してください</p>
        <p class="text-center text-xl">（下の追加・削除ボタンで入力欄を追加・削除）</p>
        
        <div id="main" class="text-center mt-5 mb-5">
            <div id="text">
                <textarea class="left" id="left_1" name="words1[word_left]" rows="1" cols="40" style="overflow:hidden">{{ old('words1.word_left') }}</textarea>
                <textarea class="right" id="right_1" name="words1[word_right]" rows="1" cols="40" style="overflow:hidden">{{ old('words1.word_right') }}</textarea>
            </div>
        </div>
        <div class="text-center">
        <p class="text-red-600">{{ $errors->first('words.word_left') }}</p>
        <p class="text-red-600">{{ $errors->first('words.word_right') }}</p>
        </div>
    </form>
    
    <div class="flex justify-around mt-5 mb-5">
        <div class="flex items-center">
        <!--<h2 class="mr-2">入力欄</h2>-->
        <button class="bg-blue-400 hover:bg-blue-500 text-white rounded px-2 py-1 mr-2 ml-5" id="add_btn" name="add" onclick="addBox()">追加</button>
        <button class="bg-blue-400 hover:bg-blue-500 text-white rounded px-2 py-1" id="delete_btn" name="delete" onclick="delBox()">削除</button>
        </div>
        
        <div></div>
    </div>
    <div class="footer underline">
        <a href="/">一覧に戻る</a>
    </div>
    <script src="{{ asset('/js/add_delete.js') }}"></script>
</x-app-layout>