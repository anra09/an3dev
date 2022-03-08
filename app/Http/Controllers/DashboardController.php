<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Models\Pengguna_layanan;
use App\Models\Penyedia_layanan;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user()->id;
        $pendaftarans=Pendaftaran::select()->where('pengguna_id' , $user)->get();
        // $penggunas=Pengguna_layanan::select()->where('user_id' , $user)->get();
        // dd($penggunas);
        // dd($pendaftarans);
        return view('dashboard', [
            "active"=>'dashboard',
            'judul'=>'Dasboard',
            // 'penggunas' => Pengguna_layanan::select()->where('user_id' , $user)->get(),
            'penyedia_layanans'=>Penyedia_layanan::all(),
            'layanans'=>Layanan::all(),
            'pendaftarans'=>Pendaftaran::select()->where('pengguna_id' , $user)->get(),
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
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Layanan $layanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layanan $layanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan)
    {
        //
    }
}
