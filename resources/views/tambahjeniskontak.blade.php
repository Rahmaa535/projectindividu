@extends('admin')
@section('title', 'Tambah Kontak')
@section('content-title', 'Tambah Kontak')
@section('content')

<br>
<div class="card shadow-lg p-3 mb-5 bg-white rounded">
    <div class="card-body">
 
        <form action="{{ route('master_k.tambahjenis')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Jenis kontak</label>
                <input class="form-control" id="jenis_kontak" name="jenis_kontak">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success">
                <a href="{{ route('master_k.index') }}" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
</div>

@endsection