<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesanTempat extends Model
{
    protected $table = 'pesan_tempat';

    protected $fillable = ['biodata_id', 'nama_lengkap', 'tempat_id', 'harga', 'jumlah'];


    public function Biodata()
    {
        return $this->belongsTo(Biodata::class);
    }

    public function Tempat()
    {
        return $this->belongsTo(Tempat::class);
    }
}
