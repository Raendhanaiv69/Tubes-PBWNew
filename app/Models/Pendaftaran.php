<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = ["id_pendaftaran","id_isi_kursus","nama","tanggal_lahir","gender","nomor_hp","alamat","pembayaran","tanggal_kursus"];
    protected $table = 'pendaftaran';
}
