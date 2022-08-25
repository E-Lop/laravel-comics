@extends('layouts.app')

@section('page_title')
    Comics
@endsection

@section('main_content')
    <div class="main-section">
        @include('components.comics-list')
    </div>
@endsection