<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{

     protected $table = 'kosts';
     protected $fillable =  ['nama', 'deskripsi', 'harga_per_bulan', 'jenis','id_pemilik','no_telepon'];

     public function kosts()
    {
        return $this->hasMany(Kost::class, 'id_pemilik');

    }

    /**
     * Mendapatkan semua review yang diberikan oleh pengguna.
     */
   public function fasilitas()
    {
        return $this->belongsToMany(Fasilitas::class, 'kost_fasilitas' , 'id_kost','id_fasilitas');
    }

    public function alamat()
    {
        return $this->hasOne(Alamat::class,'id_kost');
    }
}
