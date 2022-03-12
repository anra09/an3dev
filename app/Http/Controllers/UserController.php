<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Layanan;
use Illuminate\Validation\Rule;
use App\Models\Pengguna_layanan;
use App\Models\Penyedia_layanan;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user()->id;
        return view('app.profile.edit', [
            'header'=>0,
            'menu'=>0,
            'judul'=>'',
            'kembali'=>'/user',
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // $penggunas=Pengguna_layanan::select()->where('user_id' , $user)->get();
        // dd($penggunas);
        return view('app.profile.edit', [
            'header'=>0,
            'menu'=>0,
            'judul'=>'',
            'kembali'=>'/profile',
            'penggunas' => Pengguna_layanan::select()->where('user_id' , $user->id)->get(),
            'penyedia_layanans'=>Penyedia_layanan::all(),
            'layanans'=>Layanan::all(),
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('app.profile.edit', [
            'header'=>0,
            'menu'=>0,
            'judul'=>'',
            'kembali'=>'/profile',
            'penggunas' => Pengguna_layanan::select()->where('user_id' , $user->id)->get(),
            'penyedia_layanans'=>Penyedia_layanan::all(),
            'layanans'=>Layanan::all(),
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
