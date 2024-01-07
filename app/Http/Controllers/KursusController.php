<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kursus;
use App\Models\IsiKursus;
use Illuminate\Support\Facades\DB;

class KursusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('adminkursus');
    }

    public function showIsiKursusAdmin()
    {
        $course = Kursus::all();
        return view('adminisikursus',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_kursus' => 'required',
            'deskripsi' => 'required',
            'gambar_kursus' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            DB::beginTransaction();

            $kursus = new Kursus();
            $kursus->judul_kursus = $request->input('judul_kursus');
            $kursus->deskripsi = $request->input('deskripsi');
            $kursus->gambar_kursus = $request->input('gambar_kursus');

            if ($request->hasFile('gambar_kursus')) {
                $request->file('gambar_kursus')->move('gambar_kursus/',$request->file('gambar_kursus')->getClientOriginalName());
                $kursus->gambar_kursus = $request->file('gambar_kursus')->getClientOriginalName();
            }

            $kursus->save();

            DB::commit();

            return redirect()->route('adminisikursus')->with('success', 'Berhasil Menambahkan Kursus');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan Kursus: ' . $e->getMessage());
        }
    }

    public function storeIsiKursus(Request $request)
    {
        $request->validate([
            'judul_isi_kursus' => 'required',
            'id_kursus' => 'required',
            'lokasi' => 'required',
            'fasilitas' => 'required',
            'jadwal_biaya' => 'required',
        ]);

        try {
            DB::beginTransaction();

            $isiKursus = new IsiKursus();
            $isiKursus->judul_isi_kursus = $request->input('judul_isi_kursus');
            $isiKursus->id_kursus = $request->input('id_kursus');
            $isiKursus->lokasi = $request->input('lokasi');
            $isiKursus->fasilitas = $request->input('fasilitas');
            $isiKursus->jadwal_biaya = $request->input('jadwal_biaya');

            $isiKursus->save();

            DB::commit();

            return redirect()->route('adminkursus')->with('success', 'Berhasil Menambahkan Kursus');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan Kursus: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
