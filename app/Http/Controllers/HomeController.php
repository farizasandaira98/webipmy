<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKegiatan;
use App\Models\DataAnggota;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $anggota = DataAnggota::count('nama_anggota');
        $kegiatan = DataKegiatan::count('nama_kegiatan');
        return view('admin/home')
        ->with(compact('anggota'))
        ->with(compact('kegiatan'));
    }
}
