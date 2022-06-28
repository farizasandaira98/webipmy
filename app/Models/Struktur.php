<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
    use HasFactory;

    public function struktur()
  {
    return $this->hasMany(DataAnggota::class);
  }

  protected $table = 'strukturs';
  protected $fillable = ['nama_jabatan'];
}
