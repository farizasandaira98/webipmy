<?php

namespace App\Http\Controllers;

use App\Models\DataAnggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Struktur;



class DataAnggotaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $anggota = DataAnggota::paginate(5);
        return view('/admin/anggota/index')
        ->with(compact('anggota'));

    }

    public function tambah()
    {
        $jabatan = Struktur::all();
        return view('/admin/anggota/tambah')
        ->with(compact('jabatan'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'id_anggota' => 'required',
            'nama_anggota' => 'required',
            'status_di_jogja' => 'required',
            'alamat_tinggal' => 'required',
            'alamat_domisili' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required',
            'motto' => 'required',
            'foto_anggota' => 'required',
            'status_aktif' => 'required',
            'id_jabatan' => 'required',
        ]);

        $file = $request->file('foto_anggota');
        $ekstensi = $request->file('foto_anggota')->getClientOriginalExtension();
        $tujuan_upload = 'foto_anggota';
        $namafoto = $request->id_anggota."_".$request->nama_anggota.".".$ekstensi;
        $file->move($tujuan_upload,$namafoto);

        $anggota = DataAnggota::create([
            'id_anggota' => $request->id_anggota,
            'nama_anggota' => $request->nama_anggota,
            'status_di_jogja' => $request->status_di_jogja,
            'alamat_tinggal' => $request->alamat_tinggal,
            'alamat_domisili' => $request->alamat_domisili,
            'email' => $request->email,
            'nomor_telepon' => $request->nomor_telepon,
            'motto' => $request->motto,
            'foto_anggota' => $namafoto,
            'status_aktif' => $request->status_aktif,
            'id_jabatan' => $request->id_jabatan,
        ]);

        if($anggota){
            Session::flash('success', 'Data Berhasil Ditambahkan');
            return redirect('home/anggota');
            } else {
            Session::flash('errors', ['' => 'Terjadi Kesalahan...']);
            return redirect('home/anggota');
            }
    }

    public function edit($id)
    {
        $jabatan = Struktur::all();
        $anggota = DataAnggota::where('id', $id)->first();
        return view('/admin/anggota/edit', ['anggota' => $anggota])
        ->with(compact('jabatan'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'id_anggota' => 'required',
            'nama_anggota' => 'required',
            'status_di_jogja' => 'required',
            'alamat_tinggal' => 'required',
            'alamat_domisili' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required',
            'motto' => 'required',
            'foto_anggota' => 'required',
            'status_aktif' => 'required',
            'id_jabatan' => 'required',
        ]);

        $anggota = DataAnggota::where('id', $id)->first();

        unlink(public_path("foto_anggota/".$anggota->foto_anggota));

        $file = $request->file('foto_anggota');
        $ekstensi = $request->file('foto_anggota')->getClientOriginalExtension();
        $namafoto = $request->id_anggota."_".$request->nama_anggota.".".$ekstensi;

        $anggota->id_anggota = $request->id_anggota;
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->status_di_jogja = $request->status_di_jogja;
        $anggota->alamat_tinggal = $request->alamat_tinggal;
        $anggota->alamat_domisili = $request->alamat_domisili;
        $anggota->email = $request->email;
        $anggota->nomor_telepon = $request->nomor_telepon;
        $anggota->motto = $request->motto;
        $anggota->foto_anggota = $namafoto;
        $anggota->status_aktif = $request->status_aktif;
        $anggota->id_jabatan = $request->id_jabatan;
        $status = $anggota->save();

        $tujuan_upload = 'foto_anggota';
        $file->move($tujuan_upload,$namafoto);

        if($status){
            Session::flash('success', 'Data Berhasil Diedit');
            return redirect('home/anggota');
            } else {
            Session::flash('errors', ['' => 'Terjadi Kesalahan...']);
            return redirect('home/anggota');
            }
    }

    public function destroy($id)
    {
        $anggota = DataAnggota::where('id', $id)->first();
        unlink(public_path("foto_anggota/".$anggota->foto_anggota));
        $anggota->delete();

        if($anggota){
            Session::flash('success', 'Data Berhasil Dihapus');
            return redirect('home/anggota');
            } else {
            Session::flash('errors', ['' => 'Terjadi Kesalahan...']);
            return redirect('home/anggota');
            }
    }

    public function search(Request $request)
    {
        $cari = $request->search;
        $anggota = DataAnggota::where('status_di_jogja','LIKE','%'.$cari.'%')
        ->orWhere('nama_anggota','LIKE','%'.$cari.'%')
        ->orWhere('id_anggota','LIKE','%'.$cari.'%')
        ->orWhere('alamat_tinggal','LIKE','%'.$cari.'%')
        ->orWhere('alamat_domisili','LIKE','%'.$cari.'%')
        ->orWhere('status_aktif','LIKE','%'.$cari.'%')
        ->paginate(5);
        return view('/admin/anggota/index', ['anggota' => $anggota]);
    }

    public function cetak()
    {
        $anggota = DataAnggota::all();
        $pdf = PDF::loadview('/admin/anggota/cetak',['anggota'=>$anggota]);
        return $pdf->stream();
    }

}
