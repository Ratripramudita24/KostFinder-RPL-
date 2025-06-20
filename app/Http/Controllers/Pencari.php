<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use App\Models\Review;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Pencari extends Controller
{
    public function dashboard(){
        return view ('pencari.dashboard');
    }
    public function telusuriKost()
    {
        $telusuri = Kost::all();
        return view('pencari.telusuriKost', compact('telusuri'));

    }
    public function tambahReview($id)
    {
        return view('pencari.tambahReview',compact('id'));
    }
    public function simpanReview(Request $request, $id)
    {
        $request->validate([
            'komentar'=> 'required|string|max:110']);

        $kost = Kost::findOrFail($id);
        $review = new Review();
        $review->id_kost = $kost->id;
        $review->id_user = Auth::user()->id;
        $review->komentar = $request->komentar;
        $review->save();

        return redirect()->route('lihatReview')->with('success', 'Telah Menambahkan Review.');
    }
    public function lihatReview()
    {
        $lihat = Review::all();
        return view('pencari.lihatReview', compact('lihat'));

    }
}
