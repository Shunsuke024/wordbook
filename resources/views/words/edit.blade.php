<x-app-layout>
    
    <h1 class="text-3xl text-center mt-5 mb-5">単語を編集できます</h1>
    <div class="text-center">
        <form action="/words/{{ $word->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="text-center mt-5 mb-5">
                <textarea name="word[word_left]"  cols="40" style="overflow:hidden">{{ $word->word_left }}</textarea>
                <textarea name="word[word_right]"  cols="40" style="overflow:hidden">{{ $word->word_right }}</textarea>
            </div>
            <input class="bg-blue-400 hover:bg-blue-500 text-white rounded px-2 py-1 shadow-lg" type="submit" value="保存">
        </form>
    </div>
    
</x-app-layout>