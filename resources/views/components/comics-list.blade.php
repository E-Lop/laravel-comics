<section class="comics-list">
    <div class="container">
        <div class="comic_book_card">
            @foreach ($comics_array as $comicbook)
            <img src="{{ $comicbook['thumb'] }}" alt="{{ $comicbook['title'] }}">
            <h2>{{ $comicbook['series'] }}</h2>
                
            @endforeach
          </div>
    </div>
</section>