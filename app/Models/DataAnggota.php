<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAnggota extends Model
{
    use HasFactory;

    public function struktur()
      {
        return $this->belongsTo(Struktur::class,'id_jabatan');
      }

    protected $table = 'data_anggotas';
	protected $fillable = ['id_anggota','nama_anggota','status_di_jogja','alamat_tinggal',
    'alamat_domisili','email','nomor_telepon','motto',
    'foto_anggota','status_aktif','id_jabatan'];
}

