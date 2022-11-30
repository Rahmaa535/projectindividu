@extends('admin')
@section('title', 'Tambah Kontak')
@section('content-title', 'Tambah Kontak')
@section('content')
<div class="card shadow-lg p-3 mb-5 bg-white rounded">
    <div class="card-body">
 
        <form action="{{ route('master_k.store')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="hidden" name="siswa_id" value="{{$siswa->id}}">
                <label for="jenis_kontak">Jenis Kontak</label>
                <select class="form-select form-control" id="jenis_kontak" name="jenis_kontak">
                    @foreach ($jenis_kontak as $kontak)
                        <option value="{{ $kontak->id }}">{{ $kontak->jenis_kontak }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Deskripsi kontak</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Tambah">
                <a href="{{ route('master_k.index') }}" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
</div>
    
@endsection
