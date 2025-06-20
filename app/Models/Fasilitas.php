<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';
    protected $fillable = ['nama_fasilitas'];
    public function kosts()
    {
        return $this->belongsToMany(Kost::class, 'kost_fasilitas', 'id_kost', 'id_fasilitas');
    }
}
