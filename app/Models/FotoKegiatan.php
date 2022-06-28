<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoKegiatan extends Model
{
    public function data_kegiatan()
      {
        return $this->belongsTo(DataKegiatan::class,'id_kegiatan');
      }

    protected $table = 'foto_kegiatans';
	protected $fillable = ['id_kegiatan','nama_foto'];
}
