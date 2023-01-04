@extends('layouts.frontend.app')


@section('content')

<section class="publikasi-container">
    <div class="publikasi-header">
        <h2 class="publikasi-title">Publikasi Detail</h2>
    </div>
    <div class="publikasi-detail">
        <div>
            <img src="{{asset('storage/'.$publication->cover)}}" alt="">
        </div>
        <div class="publikasi-deskripsi">
            <h1>{{$publication->title}}</h1>
            <a href="{{asset('storage/'.$publication->file)}}" target="__blank" style="text-decoration:none"><h2 class="download-button">Download</h2></a>
        </div>
    </div>
</section>

@include('layouts.frontend.content')

@endsection