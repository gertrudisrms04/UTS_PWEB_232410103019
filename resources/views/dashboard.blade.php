@extends('layouts.apps')

@section('sidebar')
    @include('components.sidebar')
@endsection

@section('title', 'Dashboard')

@section('content')
    <h2 class="mb-4">Dashboard</h2>
    

    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title">Total Barang</h5>
                    <p class="card-text">{{ $totalBarang }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <h5 class="card-title">Barang Hampir Habis / Rusak</h5>
                    <p class="card-text">{{ $barangHampirHabis }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">Barang Dipinjam</h5>
                    <p class="card-text">{{ $jumlahDipinjam }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-danger">
                <div class="card-body">
                    <h5 class="card-title">Barang Dikembalikan</h5>
                    <p class="card-text">{{ $jumlahDikembalikan }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Tabel Daftar Barang --}}
    <h3>Daftar Barang</h3>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>Stok</th>
                <th>Status</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $b)
                <tr>
                    <td>{{ $b['nama'] }}</td>
                    <td>{{ $b['stok'] }}</td>
                    <td>{{ ucfirst($b['status']) }}</td>
                    <td>{{ $b['kategori'] }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modalBarang">Edit</a>
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


