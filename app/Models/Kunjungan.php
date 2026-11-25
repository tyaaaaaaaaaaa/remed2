<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
   protected $table = 'tb_kunjungan';
   protected $primaryKey = 'id_kunjungan';
   protected $fillable = ['nama_pasien','no_telepon','keluhan','tanggal_pengunjung','status'];
}
