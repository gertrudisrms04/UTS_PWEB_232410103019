@extends('layouts.apps')

@section('sidebar')
    @include('components.sidebar')
@endsection

@section('title', 'Profil')

@section('content')
    <div class="container">
        <h2 class="mb-4">Profil Pengguna</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card mb-4">
            <div class="card-body">
                <p><strong>username:</strong> {{ $username }}</p>
            </div>
        </div>

        <h4>Ganti Password</h4>
        <form method="POST" action="/profile/password">
            @csrf
            <div class="mb-3">
                <label for="password_lama" class="form-label">Password Lama</label>
                <input type="password" class="form-control" name="password_lama">
                @error('password_lama') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
                <label for="password_baru" class="form-label">Password Baru</label>
                <input type="password" class="form-control" name="password_baru">
                @error('password_baru') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
                <label for="konfirmasi_password" class="form-label">Konfirmasi Password Baru</label>
                <input type="password" class="form-control" name="konfirmasi_password">
                @error('konfirmasi_password') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
