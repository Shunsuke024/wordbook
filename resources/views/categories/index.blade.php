<x-app-layout>
    <h1 class="text-xl text-center">単語帳</h1>
    
    <a href='/words/create'>単語登録</a>
    
    <div class="flex">
        <h2 class="flexinitial">{{ $word->English }}</h2>
        <h2 class="flexinitial">{{ $word->English }}</h2> 
        
    </div>
</x-app-layout>