@extends('layouts.admin')

@section('content')
    {{--  <!-- Begin Page Content -->  --}}
<div class="container-fluid">

    {{--  <!-- Page Heading -->  --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Jenis Sampah {{ $item->nama_sampah }}</h1>
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
            <form action="{{ route('jenis-sampah.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form group">
                    <label for="jenis_sampah">Nama Sampah</label>
                    <input type="text" class="form-control" name="jenis_sampah" placeholder="Nama Pasien" value="{{ $item->jenis_sampah }}">
                </div>
                <div class="form group">
                    <label for="deskripsi_sampah">Deskripsi Sampah</label>
                    <input type="text" class="form-control" name="deskripsi_sampah" placeholder="Nama Pasien" value="{{ $item->deskripsi_sampah }}">
                </div>
                <div class="form-group">
                    <label for="harga_sampah">Harga per KG</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp. </div>
                        </div>
                        <input type="text" class="form-control" name="harga_sampah" value="{{ $item->harga_sampah }}" placeholder="Harga Sampah">
                    </div>
                </div>
                <div class="form-group">
                    <label for="foto_sampah">Foto Sampah</label>
                    <input type="file" class="form-control" name="foto_sampah" placeholder="foto_sampah" value="{{ $item->foto_sampah }}">
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-block">
                    Ubah
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

