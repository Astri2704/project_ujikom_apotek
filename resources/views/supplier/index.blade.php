@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts/_flash')
            <div class="card">
                <div class="card-header">
                    Data Supplier
                    <a href="{{ route('supplier.create') }}" class="btn btn-sm btn-primary" style="float: right">
                        Tambah Data
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle" id="datatables">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Supplier</th>
                                    <th>Nama Obat</th>
                                    <th>Jumlah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($supplier as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->supplier }}</td>
                                    <td>{{ $data->nama_obat }}</td>
                                    <td>{{ $data->jumlah }}</td>
                                    <td>
                                        <form action="{{ route('supplier.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('supplier.edit', $data->id) }}"
                                                class="btn btn-sm btn-outline-success">
                                                Edit
                                            </a> |
                                            <a href="{{ route('supplier.show', $data->id) }}"
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