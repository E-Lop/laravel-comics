<section class="comics-section">
    <div class="container">
        <div class="comics-list">
            @foreach ($comics as $comicbook)
                <div class="comic_book_card">
                    <img src="{{ $comicbook['thumb'] }}" alt="{{ $comicbook['title'] }}">
                    <h2>{{ $comicbook['series'] }}</h2>
                </div>    
            @endforeach
        </div>
    </div>
    
        
</section>