<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $jasa = Jasa::orderBy('tanggal_pemesanan_jasa', 'desc')
         ->orderBy('nama_jasa', 'asc')
         ->get();
        
        return view('jasa.index', compact('jasa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jasa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'nama_jasa' => 'required|string|max:255',
            'deskripsi_jasa' => 'nullable|string',
            'harga_jasa' => 'required|numeric|min:0',
            'satuan_jasa' => 'required|string|max:100',
            'tanggal_pemesanan_jasa' => 'required|date',
            'vendor_penyedia' => 'nullable|string|max:255',
        ]);

        Jasa::create($validatedData);

        return redirect()->route('jasa.index')->with('success', 'Jasa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jasa $jasa)
    {
        return view('jasa.show', compact('jasa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jasa $jasa)
    {
        return view('jasa.edit', compact('jasa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jasa $jasa)
    {
        $validatedData = $request->validate([
            'nama_jasa'               => 'required|string|max:255',
            'deskripsi_jasa'          => 'nullable|string',
            'harga_jasa'              => 'required|numeric|min:0',
            'satuan_jasa'             => 'required|string|max:100',
            'tanggal_pemesanan_jasa'  => 'required|date',
            'vendor_penyedia'         => 'nullable|string|max:255',
        ]);

         $jasa->update($validatedData);

        // Redirect ke halaman index jasa dengan pesan sukses
        return redirect()->route('jasa.index') // Menggunakan nama rute 'jasa.index'
                         ->with('success', 'Jasa berhasil diperbarui!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jasa $jasa)
    {
         try {
            // Menghapus record jasa
            $jasa->delete();
            // Redirect ke halaman index jasa dengan pesan sukses
            return redirect()->route('jasa.index') // Menggunakan nama rute 'jasa.index'
                             ->with('success', 'Jasa berhasil dihapus!');
        } catch (\Illuminate\Database\QueryException $e) {
            // Tangani jika ada error saat menghapus, misalnya karena foreign key constraint
            // Log::error("Error deleting jasa: " . $jasa->id . " - " . $e->getMessage()); // Opsional: log error
            return redirect()->route('jasa.index')
                             ->with('error', 'Gagal menghapus jasa. Kemungkinan jasa ini masih terkait dengan data lain.');
        } catch (\Exception $e) {
            // Tangani error umum lainnya
            // Log::error("Unexpected error deleting jasa: " . $jasa->id . " - " . $e->getMessage()); // Opsional: log error
            return redirect()->route('jasa.index')
                             ->with('error', 'Terjadi kesalahan saat mencoba menghapus jasa.');
        }
    }
}
