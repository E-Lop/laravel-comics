<section class="comics-section">
    <div class="container">
        <div class="comics-list">
            @foreach ($comics as $comicbook)
                <div class="comic_book_card">
                    <a href="{{ route('single_comics', ['id'=> $comicbook['id']])}}">
                        <img src="{{ $comicbook['thumb'] }}" alt="{{ $comicbook['title'] }}">
                        <h2>{{ $comicbook['series'] }}</h2>
                    </a>
                </div>    
            @endforeach
            <div class="current_series_btn">
                <a href="#">CURRENT SERIES</a>
            </div>
        </div>
    </div>
    <div class="load_more_btn">
        <a href="#">LOAD MORE</a>
    </div>
        
</section>