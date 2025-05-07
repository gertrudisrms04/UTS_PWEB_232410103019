<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengelolaanController extends Controller
{
    public function index()
    {   $username = session('email');
        $barangs = [
            ['id' => 1, 'nama' => 'Laptop Acer', 'kategori' => 'Elektronik', 'stok' => 5, 'lokasi' => 'Lab 1', 'status' => 'baik'],
            ['id' => 2, 'nama' => 'Meja Kayu', 'kategori' => 'Furniture', 'stok' => 2, 'lokasi' => 'Ruang Dosen', 'status' => 'rusak'],
            ['id' => 3, 'nama' => 'Proyektor Epson', 'kategori' => 'Elektronik', 'stok' => 1, 'lokasi' => 'Lab 2', 'status' => 'hilang'],
        ];

        return view('pengelolaan', compact('barangs', 'username'));
    }

    public function create()
    {
        return view('pengelolaan.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('pengelolaan')->with('success', 'Data barang berhasil disimpan (simulasi)');
    }

    public function show($id)
    {
        $barangs = ['id' => $id, 'nama' => 'Barang Contoh', 'kategori' => 'Elektronik', 'stok' => 1, 'lokasi' => 'Lab 1', 'status' => 'baik'];
        return view('pengelolaan.show', compact('barangs'));
    }

    public function edit($id)
    {
        $barangs = ['id' => $id, 'nama' => 'Barang Edit', 'kategori' => 'Furniture', 'stok' => 3, 'lokasi' => 'Ruang Admin', 'status' => 'rusak'];
        return view('pengelolaan.edit', compact('barangs'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('pengelolaan')->with('success', 'Data barang berhasil diperbarui (simulasi)');
    }

    public function destroy($id)
    {
        return redirect()->route('pengelolaan')->with('success', 'Data barang berhasil dihapus (simulasi)');
    }
}