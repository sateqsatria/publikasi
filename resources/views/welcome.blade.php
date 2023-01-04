@extends('layouts.frontend.app')

@section('content')

<section class="hero-container">
    <div>
        <div>
            <h1>Angka Hortikultura</h1>
            <p>Membangun Hortikultura Dengan Data</p>
        </div>
    </div>
    <img src="{{asset('assets/img/hero.jpg')}}" alt="hero">
</section>
<section class="description-container">
    <div>
        <div>
            <h2>Tanaman Hortikultura</h2>
            <p>Tanaman hortikultura adalah tanaman yang menghasilkan buah, sayuran, bahan obat nabati, florikultura, termasuk di dalamnya jamur, lumut, dan tanaman air yang berfungsi sebagai  sayuran, bahan obat nabati, dan/atau bahan estetika.</p>
        </div>
        <div class="container-left-footer">
            <p>
                <script>
                    var today = new Date();
                    var dd = String(today.getDate()).padStart(2, '0');
                    var mm = String(today.getMonth() + 1).padStart(2, '0');
                    var yyyy = today.getFullYear();

                    today = mm + '/' + dd + '/' + yyyy;
                    document.write(today);
                </script>
            </p>
        </div>
    </div>
    <img src="{{asset('assets/img/desc.jpg')}}" alt="desc">
</section>

@include('layouts.frontend.content')

@endsection