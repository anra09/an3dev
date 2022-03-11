<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use App\Models\Pengguna_layanan;
use App\Models\Penyedia_layanan;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
// use Laravolt\Indonesia\Models\Province;
// use Laravolt\Indonesia\Models\City;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

// Get semua data


class Pengguna_layananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user()->id;
        // $penggunas=Pengguna_layanan::select()->where('user_id' , $user)->get();
        // dd($penggunas);
        return view('app.profile.index', [
            'judul'=>'Profile',
            'provinces' => Province::all(),
            'regencies' => Regency::all(),
            'districts' => District::all(),
            'villages' => Village::all(),
            'penggunas' => Pengguna_layanan::select()->where('user_id' , $user)->get(),
            'penyedia_layanans'=>Penyedia_layanan::all(),
            'layanans'=>Layanan::all(),
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
        $request -> validate([
            'user_id'=>'required',
            'nama_pengguna'=> 'required',
            'alamat_1'=> 'required',
            'alamat_2'=> 'required',
            'alamat_3'=> 'required',
            'alamat_4'=> 'required',
            'alamat_kodepos'=> 'required',
            'alamat_email'=> 'required',
            'no_telp'=> 'required',
            'nomor_identitas'=> 'required',
        ]);

        $input=$request->all();

        Pengguna_layanan::create($input);
        return redirect()->back()->with('success', 'Data Anda Telah Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengguna_layanan  $pengguna_layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengguna_layanan $pengguna_layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengguna_layanan  $pengguna_layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengguna_layanan $pengguna_layanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengguna_layanan  $pengguna_layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengguna_layanan $pengguna_layanan)
    {
        // dd($request);
        $rules = [
            'user_id'=>'required',
            'nama_pengguna'=> 'required',
            'alamat_1'=> 'required',
            'alamat_2'=> 'required',
            'alamat_3'=> 'required',
            'alamat_4'=> 'required',
            'alamat_kodepos'=> 'required',
            'alamat_email'=> 'required',
            'no_telp'=> 'required',
            'nomor_identitas'=> 'required',
        ];

        $input = $request->validate($rules);

        Pengguna_layanan::where('user_id', $request->user_id)
                            ->update($input);
        return redirect()->back()->with('success', 'Data Anda Berhasil Di Ubah');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengguna_layanan  $pengguna_layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengguna_layanan $pengguna_layanan)
    {
        //
    }
}
