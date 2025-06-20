<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use App\Models\Review;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function dashboard(){
        return view ('admin.dashboard');
    }

    public function lihatDaftarKost()
    {
        $lihat = Kost::all();
        return view('admin.lihatDaftarKost', compact('lihat'));

    }

    public function lihatReviewKost()
    {
        $lihat = Review::all();
        return view('admin.lihatReviewKost', compact('lihat'));

    }

}
