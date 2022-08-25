@extends('layouts.app')

@section('page_title')
Comicbook    
@endsection

@section('main_content')
<div class="main-section">
    <section class="comicbook-top-section">
    <div class="accent-bar"></div>
    <div class="container">
        <div class="row">
            <div class="col_sx">
                <h1>{{$current_comics['title']}}</h1>
                <div class="green_price">
                    U.S. Price:{{$current_comics['price']}}
                </div>
                <p>{{$current_comics['description']}}</p>
            </div>
            <div class="col_dx">
                <img src="{{ asset('img/lorem.jpg') }}" alt="Immagine pubblicitaria">
            </div>
        </div>
        <div class="current_issue_cover">
            <img src="{{ $current_comics['thumb'] }}" alt="{{ $current_comics['title'] }}">
        </div> 
    </div>          
</section>
<section class="comicbook-bottom-section">
    <div class="container">
        <div class="row">
            <div class="left-half">
                <h2>Talent</h2>
                <div class="artist-row">
                    <div class="attribution-tag">Art by:</div>
                    <div class="artist-list">
                        <ul>
                            @foreach ($current_artists as $artist)
                                <li><a href="#">{{$artist}}</a></li>
                                @if (!$loop->last)
                                    ,&nbsp;
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="writer-row">
                    <div class="attribution-tag">Written by:</div>
                    <div class="writer-list">
                        <ul>
                            @foreach ($current_writers as $writer)
                                <li><a href="#">{{$writer}}</a></li>
                                @if (!$loop->last)
                                    ,  
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="right-half">
                <h2>Specs</h2>
                <div class="series-row">
                    <div class="series-tag">Series:</div>
                    <div class="series-link">
                        <a href="#">{{$current_comics['series']}}</a>
                    </div>
                </div>
                <div class="price-row">
                    <div class="price-tag">U.S. Price:</div>
                    <div class="price-data">{{$current_comics['price']}}</div>
                </div>
                <div class="sale-date-row">
                    <div class="sale-date-tag">On Sale Date:</div>
                    <div class="sale-date-data">{{$current_comics['sale_date']}}</div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection