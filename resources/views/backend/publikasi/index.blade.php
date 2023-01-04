@extends('layouts.backend.app')

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

<div class="card">
    <div class="card-header">
        <h2>Daftar Publikasi</h2>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-primary float-end mb-3" data-bs-toggle="modal" data-bs-target="#create">
            Tambah Publikasi
        </button>
        <table id="table" class="table table-bordered table-hover">
            <thead>
                <tr class="bg-warning">
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
                        <a href="{{url('publication-edit', $item->id)}}" class="btn btn-info">Edit</a>
                        <a href="{{url('publication-delete', $item->id)}}" class="btn btn-danger" onclick="alert('Apakah Anda Yakin Menghapus {{$item->title}}')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Publikasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('publication/create')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="file" name="file" id="file" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="cover">Cover</label>
                            <input type="file" name="cover" id="cover" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection