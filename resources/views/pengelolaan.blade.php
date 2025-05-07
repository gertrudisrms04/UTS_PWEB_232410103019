@extends('layouts.apps')
@section('sidebar')
    @include('components.sidebar')
@endsection

@section('title', 'Pengelolaan')

@section('content')
    <h2 class="mb-4">Pengelolaan Data Barang</h2>

    {{-- Form Tambah Barang --}}
    <div class="card mb-4">
        <div class="card-header">Tambah Barang Baru</div>
        <div class="card-body">
            <form>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Nama Barang">
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" placeholder="Kategori">
                    </div>
                    <div class="col-md-2">
                        <input type="number" class="form-control" placeholder="Stok">
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" placeholder="Lokasi">
                    </div>
                    <div class="col-md-2">
                        <select class="form-select">
                            <option>Baik</option>
                            <option>Rusak</option>
                            <option>Hilang</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>

    {{-- Filter dan Pencarian --}}
    <div class="d-flex justify-content-between mb-3">
        <div>
            <select class="form-select w-auto d-inline-block">
                <option value="">Filter Status</option>
                <option value="baik">Baik</option>
                <option value="rusak">Rusak</option>
                <option value="hilang">Hilang</option>
            </select>
        </div>
        <div>
            <input type="text" class="form-control w-auto d-inline-block" placeholder="Cari barang...">
        </div>
    </div>

    {{-- Daftar Barang --}}
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Lokasi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $b)
                <tr>
                    <td>{{ $b['nama'] }}</td>
                    <td>{{ $b['kategori'] }}</td>
                    <td>{{ $b['stok'] }}</td>
                    <td>{{ $b['lokasi'] }}</td>
                    <td>
                        <span class="badge bg-{{ $b['status'] == 'baik' ? 'success' : ($b['status'] == 'rusak' ? 'warning' : 'danger') }}">
                            {{ ucfirst($b['status']) }}
                        </span>
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('footer')
    @include('components.footer')
@endsection
