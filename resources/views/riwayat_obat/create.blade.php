
@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts/_flash')
            <div class="card">
                <div class="card-header">
                    Data Riwayat Obat
                </div>
                <div class="card-body">
                    <form action="{{ route('obat.store') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Type</label>
                            <input type="text" class="form-control  @error('type') is-invalid @enderror"
                                name="type">
                            @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                       
                        <div class="mb-3">
                            <label class="form-label">Nama Obat</label>
                            <select name="id_obat" class="form-control @error('id_obat') is-invalid @enderror"
                                id="">
                                @foreach ($obats as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_obat }}</option>
                                @endforeach
                            </select>
                            @error('id_obat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah</label>
                            <input type="number" class="form-control  @error('jumlah') is-invalid @enderror"
                                name="jumlah">
                            @error('jumlah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>

@endsection 
