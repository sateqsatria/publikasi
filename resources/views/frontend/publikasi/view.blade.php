@extends('layouts.frontend.app')

@section('content')

<section class="publikasi-container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="publikasi-header">
        <h2 class="publikasi-title">Detail Publikasi</h2>
    </div>
    <div class="publikasi-detail">
        <div>
            <img src="{{asset('storage/'.$publication->cover)}}" alt="">
        </div>
        <div class="publikasi-deskripsi">

            <h1>{{$publication->title}}</h1>
            <form action="{{url('publikasi-download', $publication->slug)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                <input type="hidden" name="publication_id" value="{{$publication->id}}">

                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Masukan Nama">

                <label for="instansi">Asal Instansi</label>
                <input type="text" id="instansi" name="instansi" placeholder="Masukan Instansi">
            
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Masukan Email">
            
                <input type="submit" value="Download">
            </form>
        </div>
    </div>
</section>

@include('layouts.frontend.content')


@endsection