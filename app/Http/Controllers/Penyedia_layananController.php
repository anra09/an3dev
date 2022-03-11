<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Pengguna_layanan;
use App\Models\Penyedia_layanan;
use Illuminate\Http\Request;

class Penyedia_layananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan_id=request('layanan');
        return view('app.layanan.index',[
            'judul'=>'Lihat Layanan',
            'penyedia_layanans'=>Penyedia_layanan::select()->where('id' , $layanan_id)->get(),
            'layanans'=>Layanan::select()->where('penyedia_layanan_id' , $layanan_id)->get(),
            'penggunas'=>Pengguna_layanan::all(),
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penyedia_layanan  $penyedia_layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Penyedia_layanan $penyedia_layanan)
    {
        dd($penyedia_layanan->id);
        return view('app.layanan.detail',[
            'penyedia_layanans'=>Penyedia_layanan::all(),
            'layanans'=>Layanan::all(),
            'penggunas'=>Pengguna_layanan::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penyedia_layanan  $penyedia_layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penyedia_layanan $penyedia_layanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penyedia_layanan  $penyedia_layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penyedia_layanan $penyedia_layanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penyedia_layanan  $penyedia_layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penyedia_layanan $penyedia_layanan)
    {
        //
    }
}
