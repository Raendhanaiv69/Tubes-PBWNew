<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
        protected $primaryKey = 'id_kursus';
        protected $fillable = ["judul_kursus","deskripsi","gambar_kursus"];
        protected $table = 'kursus';

        public function isiKursus()
{
    return $this->hasMany(IsiKursus::class, 'id_kursus', 'id_kursus');
}
}
