@extends('layouts.app')

@section('page_title')
Comicbook    
@endsection

@section('main_content')
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
                <img src="{{ asset('img/adv.jpg') }}" alt="Immagine pubblicitaria">
            </div>
        </div>
        <div class="current_issue_cover">
            <img src="{{ $current_comics["thumb"] }}" alt="{{ $current_comics['title'] }}">
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
                        <a href="#">{{implode($current_comics["artists"])}}</a>
                    </div>
                </div>
                <div class="writer-row">
                    <div class="attribution-tag">Written by:</div>
                    <div class="writer-list">
                        <a href="#">{{implode($current_comics["writers"])}}</a>
                    </div>
                </div>
            </div>
            <div class="right-half">
                <h2>Specs</h2>
            </div>
        </div>
    </div>
</section>
@endsection