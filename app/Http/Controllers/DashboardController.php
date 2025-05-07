<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $username = session('email');
        $barang = [
            ['nama' => 'Laptop', 'stok' => 5, 'status' => 'baik', 'kategori' => 'Elektronik'],
            ['nama' => 'Proyektor', 'stok' => 1, 'status' => 'rusak', 'kategori' => 'Elektronik'],
            ['nama' => 'Kursi', 'stok' => 30, 'status' => 'baik', 'kategori' => 'Furniture'],
            ['nama' => 'Meja', 'stok' => 2, 'status' => 'baik', 'kategori' => 'Furniture'],
            ['nama' => 'Printer', 'stok' => 0, 'status' => 'rusak', 'kategori' => 'Elektronik'],
        ];

        $peminjaman = [
            ['status' => 'dipinjam'],
            ['status' => 'dikembalikan'],
            ['status' => 'dipinjam'],
        ];

        $totalBarang = count($barang);
        $barangHampirHabis = collect($barang)->filter(fn($b) => $b['stok'] <= 2 || $b['status'] == 'rusak')->count();
        $jumlahDipinjam = collect($peminjaman)->where('status', 'dipinjam')->count();
        $jumlahDikembalikan = collect($peminjaman)->where('status', 'dikembalikan')->count();
        $kategoriTerbanyak = collect($barang)
            ->groupBy('kategori')
            ->map(fn($items) => count($items))
            ->sortDesc()
            ->keys()
            ->first();

        return view('dashboard', compact(
            'username',
            'totalBarang',
            'barangHampirHabis',
            'jumlahDipinjam',
            'jumlahDikembalikan',
            'kategoriTerbanyak',
            'barang'
        ));
    }
}
