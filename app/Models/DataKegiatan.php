<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKegiatan extends Model
{
    use HasFactory;

    public function struktur()
  {
    return $this->hasMany(FotoKegiatan::class);
  }

  protected $table = 'data_kegiatans';
  protected $fillable = ['nama_kegiatan','lokasi_kegiatan','deskripsi'];
}
