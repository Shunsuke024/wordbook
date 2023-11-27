<x-app-layout>
    
    <h1 class="text-2xl text-center mt-5 mb-5">編集画面</h1>
    <div class="text-center mt-5 mb-5">
        <form action="/words/{{ $word->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class=''>
                <input name='word[word_left]' value="{{ $word->word_left }}">
                <input name='word[word_right]' value="{{ $word->word_right }}">
                
            <input class="bg-blue-400 hover:bg-blue-500 text-white rounded px-2 py-1" type="submit" value="保存">
        </form>
    </div>
    
</x-app-layout>