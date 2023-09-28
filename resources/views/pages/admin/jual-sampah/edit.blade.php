@extends('layouts.admin')

@section('content')
    {{--  <!-- Begin Page Content -->  --}}
<div class="container-fluid">

    {{--  <!-- Page Heading -->  --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Jual Sampah</h1>
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
            <form action="{{ route('jual-sampah.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Jenis Sampah</label>
                    <select name="id_sampah" id="id_sampah" required class="form-control">
                        <option value="">Pilih Jenis Sampah</option>
                        @foreach($items as $item)
                            <option value="{{ $item->id_sampah }}">
                                {{ $item->jenis_sampah }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form group">
                    <label for="harga">Harga per Kg</label>
                    <input type="number" class="form-control" name="harga" id="harga" placeholder="">
                </div>
                <div class="form group">
                    <label for="harga_total">Berat Sampah (Kg)</label>
                    <input type="number" class="form-control" name="harga_total" placeholder="Berat Sampah">
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
<script>
    $('#id_sampah').on('change', (event) => {
        getSampah(event.target.value).then(sampah =>{
            $('#harga').val(sampah.harga_sampah);
        });
    });
</script>
@endsection

