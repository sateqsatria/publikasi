@extends('layouts.backend.app')

@section('content')


<div class="card">
    <div class="card-header">
        <h2>Edit Publikasi</h2>
    </div>
    <form action="{{url('publication-update', $publication->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="card-body">
            <div class="modal-body">
                <div class="row">
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" name="title" id="title" value="{{$publication->title}}" class="form-control">
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
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

    
@endsection