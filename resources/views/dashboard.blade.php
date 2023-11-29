<x-app-layout>
    <p class="text-center text-3xl mt-20 ">オリジナル単語帳</p>
    <p class="text-blue-400 text-center text-6xl drop-shadow-lg mb-5">My Word Book</p>
    
    <div class="flex justify-center mt-20">
        <div>
        <p class="text-2xl text-center">最近の単語登録履歴</p>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-12">
        @foreach($word as $word)
            <h1 class="text-xl text-center">{{ $word->updated_at}}</h1>
        @endforeach
        </div>
        </div>
    </div>
</x-app-layout>
