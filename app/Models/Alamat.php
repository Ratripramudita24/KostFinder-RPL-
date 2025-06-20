<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    protected $fillable =  ['id_kost','alamat'];
    public function kost()
    {
        return $this->belongsTo(Kost::class, 'id_kost');
    }
}
