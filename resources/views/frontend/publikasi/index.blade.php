@extends('layouts.frontend.app')


@section('content')

<section class="publikasi-container">
    <div class="publikasi-header mt-5">
        <h2 class="publikasi-title">Daftar Publikasi</h2>
    </div>
    <div class="publikasi-body">
        <table id="table" class="table-publikasi">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($publications as $item)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$item->title}}</td>
                    <td>
                        <a type="button" href="{{url('publikasi', $item->slug)}}" class="publikasi-download"><span>Lihat Detail</span></a href="{{url('publikasi', $item->slug)}}">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@include('layouts.frontend.content')



<script>

    $(document).ready( function () {
        $('#table').DataTable();
    } );

</script>
@endsection