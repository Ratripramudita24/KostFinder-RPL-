<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KostFasilitas extends Model
{
    protected $table = 'KostFasilitas';
    protected $fillable =  ['kost_fasilitas', 'id_fasilitas', 'id_kost'];
    public function kost()
    {
        return $this->belongsTo(Kost::class, 'id_kost', 'alamat');
    }

    /**
     * Mendapatkan fasilitas terkait.
     */
    public function fasilitas()
    {
        return $this->belongsTo(Fasilitas::class, 'id_fasilitas');
    }
}


