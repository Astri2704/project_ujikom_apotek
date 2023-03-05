
@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        {{-- Data Riwayat Obat
                        <a href="{{ route('riwayat_obat.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a> --}}
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="datatables">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Type</th>
                                        <th>Nama Obat</th>
                                        <th>Jumlah</th>
                                        <th>Tanggal Riwayat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($riwayat_obats as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->type }}</td>
                                            <td>{{ $data->obat->nama_obat }}</td>
                                            <td>{{ $data->jumlah }}</td>
                                            <td>{{ $data->created_at }}</td>
                                            <td>
                                                <form action="{{ route('riwayat_obat.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('riwayat_obat.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('riwayat_obat.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Show
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
