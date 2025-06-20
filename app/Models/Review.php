<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'review';
    protected $fillable = ['id_kost', 'id_user','komentar', 'created_at'];

    /**
     * Mendapatkan kost terkait.
     */
    public function kost()
    {
        return $this->belongsTo(Kost::class, 'id_kost');
    }

    /**
     * Mendapatkan user terkait yang memberikan review.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
