<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsiKursus extends Model
{
    protected $fillable = ["id_isi_kursus","id_kursus","judul_isi_kursus","lokasi","fasilitas","jadwal_biaya"];
    protected $table = 'content';
    public function kursus()
{
    return $this->belongsTo(Kursus::class, 'id_kursus', 'id_kursus');
}
}
