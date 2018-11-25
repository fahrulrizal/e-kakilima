<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tempat extends Model
{
    protected $table = 'tempat';

    protected $fillable = ['kode_tempat', 'deskripsi'];


    public function PesanTempat()
    {
      return $this->hasMany(Tempat::class);
    }
    
}
