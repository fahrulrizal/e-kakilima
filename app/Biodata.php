<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table = 'biodata';

    protected $fillable = ['no_ktp', 'nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'kewarganegaraan','agama', 'nama_ayah', 'nama_ibu', 'nama_pasangan', 'jumlah_anak', 'alamat', 'nama_dagangan', 'jenis_dagangan','pendapatan','foto'];


    public function PesanTempat()
    {
      return $this->hasMany(Biodata::class);
    }
}
