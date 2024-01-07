<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IsiKursus;
use App\Models\Kursus;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\DB;
class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adminIsi = IsiKursus::all();
        return view('isikursus',compact('adminIsi'));
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
            'id_isi_kursus' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'gender' => 'required',
            'nomor_hp' => 'required',
            'alamat' => 'required',
            'pembayaran' => 'required',
            'tanggal_kursus' => 'required',
        ]);

        try {
            DB::beginTransaction();

            $pendaftaran = new Pendaftaran();
            $pendaftaran->id_isi_kursus = $request->input('id_isi_kursus');
            $pendaftaran->nama = $request->input('nama');
            $pendaftaran->tanggal_lahir = $request->input('tanggal_lahir');
            $pendaftaran->gender = $request->input('gender');
            $pendaftaran->nomor_hp = $request->input('nomor_hp');
            $pendaftaran->alamat = $request->input('alamat');
            $pendaftaran->pembayaran = $request->input('pembayaran');
            $pendaftaran->tanggal_kursus = $request->input('tanggal_kursus');

            $pendaftaran->save();

            DB::commit();

            return redirect()->route('dashboard1')->with('success', 'Berhasil Menambahkan Kursus');
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
        $kursus = Kursus::findOrFail($id);
        $adminIsi = $kursus->isiKursus;
        return view('isikursusSpec',compact('kursus','adminIsi'));
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
