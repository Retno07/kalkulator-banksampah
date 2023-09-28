@extends('layouts.admin')

@section('content')
    {{--  <!-- Begin Page Content -->  --}}
<div class="container-fluid">

    {{--  <!-- Page Heading -->  --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Jenis Sampah</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('jenis-sampah.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form group">
                    <label for="jenis_sampah">Jenis Sampah</label>
                    <input type="text" class="form-control" name="jenis_sampah" placeholder="" value="{{ old('jenis_sampah') }}">
                </div>
                <div class="form group">
                    <label for="deskripsi_sampah">Deskripsi Sampah</label>
                    <input type="text" class="form-control" name="deskripsi_sampah" placeholder="" value="{{ old('deskripsi_sampah') }}">
                </div>
                <div class="form group">
                    <label for="harga_sampah">Harga per KG</label> 
                    <input type="text" class="form-control" name="harga_sampah" placeholder="" value="{{ old('harga_sampah') }}">
                </div>
                <div class="form-group">
                    <label for="foto_sampah">Foto Sampah</label>
                    <input type="file" class="form-control" name="foto_sampah" placeholder="foto_sampah" >
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

