<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Models\Pengguna_layanan;
use App\Models\Penyedia_layanan;
use Illuminate\Routing\Controller;
use Laravolt\Indonesia\Models\Province;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $provinces = Province::pluck('name', 'id');
        $layanan_id=request('penyedia_layanan_id');
        return view('app.daftar.index', [
            'judul'=>'Daftar Layanan',
            'layanan_id'=> request('penyedia_layanan_id'),
            'penyedia_layanans'=>Penyedia_layanan::select()->where('id' , $layanan_id)->get(),
            'layanans'=>Layanan::select()->where('penyedia_layanan_id' , $layanan_id)->get(),
            'nama_layanan'=>Layanan::select()->where('id' , Request('layanan_id'))->get()->first(),
            'penggunas'=>Pengguna_layanan::all(),
            // 'provinces' => Province::pluck('name', 'id'),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $date=$request->tanggal_layanan;
        $banyak_antrian=$request->layanan_id;
        $antrian=Pendaftaran::select()->where('layanan_id', $banyak_antrian)->where('tanggal_layanan', $date)->count();
        $no_antrian=$antrian+1;
        // dd($no_antrian);
        $request -> validate([
            'penyedia_layanan_id'=> 'required',
            'layanan_id'=> 'required',
            'tanggal_layanan'=> 'required',
            'nama_pengguna'=>'required',
            'pengguna_id'=> 'required',
            'nomor_identitas'=> 'required',
            'keterangan_pendaftaran'=> 'nullable',
            'status_transaksi'=> 'required',
            'keterangan_tambahan_status'=> 'nullable',
            'no_telp'=> 'required',
        ]);

        $input= $request->all();
        Pendaftaran::create([
            'penyedia_layanan_id'=>$request->penyedia_layanan_id,
            'nama_pengguna'=>$request->nama_pengguna,
            'layanan_id'=>$request->layanan_id,
            'tanggal_layanan'=>$request->tanggal_layanan,
            'pengguna_id'=>$request->pengguna_id,
            'nomor_identitas'=>$request->nomor_identitas,
            'keterangan_pendaftaran'=>$request->keterangan_pendaftaran,
            'status_transaksi'=>$request->status_transaksi,
            'keterangan_tambahan_status'=>$request->keterangan_tambahan_status,
            'no_telp'=>$request->no_telp,
            'no_antrian'=>$no_antrian,
        ]);

        return redirect('/')->with('success', 'Anda Telah Berhasil Mendafatar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pendaftaran $pendaftaran)
    {
        $layanan_id=request('penyedia_layanan_id');
        return view('app.daftar.daftar', [
            'judul'=>'Daftar Layanan',
            'layanan_id'=> request('penyedia_layanan_id'),
            'penyedia_layanans'=>Penyedia_layanan::select()->where('id' , $layanan_id)->get(),
            'layanans'=>Layanan::select()->where('penyedia_layanan_id' , $layanan_id)->where('layanan_id', $pendaftaran)->get(),
            'penggunas'=>Pengguna_layanan::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        //
    }
}
