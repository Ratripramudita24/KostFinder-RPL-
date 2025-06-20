<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use App\Models\Fasilitas;
use App\Models\Kost;
use App\Models\KostFasilitas;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Pemilik extends Controller
{
    public function dashboard()
    {
        return view('pemilik.dashboard');
    }

    public function lihatKost()
    {
        $lihat = Kost::all();
        return view('pemilik.lihatKost', compact('lihat'));

    }

    public function tambahKost()
    {
        $fasilitas = Fasilitas::all();
        return view('pemilik.tambahKost',compact('fasilitas'));
    }
    public function simpanKost(Request $request)
    {
        DB::beginTransaction();
        try{

        $data = new Kost();
        $data->nama =$request-> nama;
        $data->deskripsi =$request-> deskripsi;
        $data->harga_per_bulan =$request-> harga_per_bulan;
        $data->jenis =$request-> jenis;
        $data->no_telepon =$request-> no_telepon;

        $data['id_pemilik'] = Auth::user()->id;
        $data->save();

         $data->alamat()->create([
        'alamat' => $request->alamat, ]);
        $fasilitas = $request->id_fasilitas ?? [];
        $data->fasilitas()->attach($fasilitas);

        DB::commit();
        return redirect()->route('lihatKost')->with('success', 'Berhasil di buat');
        }catch (\Exception $e){
            DB::rollBack();
            return redirect()->route('lihatKost')->with('Error', 'Tidak berhasil di buat' . $e->getMessage());
        }
    }


    public function editKost(Request $request)
    {
        $data = Kost::findOrFail($request->id);
        if ($request->isMethod('post')) {
            $data->nama = $request->nama;
            $data->deskripsi = $request->deskripsi;
            $data->harga_per_bulan = $request->harga_per_bulan;
            $data->jenis = $request->jenis;
            $data->no_telepon =$request-> no_telepon;
            // $data->image_url = $request->image_url;
            $data->save();
            return redirect()->route('lihatKost');
        }
        return view('pemilik.editKost', compact('data'));
    }
    public function hapus(Request $request)
    {
        $hapus = Kost::findOrFail($request->id);
        $hapus->delete();
        return redirect()->route('lihatKost');
    }





    public function lihatFasilitas()
    {
        $lihat = Fasilitas::all();
        return view('pemilik.lihatFasilitas', compact('lihat'));
    }

    public function tambahFasilitas()
    {
        $kosts = Fasilitas::all();
        return view('pemilik.tambahFasilitas',compact('kosts'));
    }

    public function simpanFasilitas(Request $request)
    {
        Fasilitas::create($request->all());
        return redirect()->route('lihatFasilitas');
    }

     public function editFasilitas(Request $request)
    {
        $data = Fasilitas::findOrFail($request->id);
        if ($request->isMethod('post')) {
            $data->nama_fasilitas = $request->nama_fasilitas;
            $data->save();
            return redirect()->route('lihatFasilitas');
        }
        return view('pemilik.editFasilitas', compact('data'));
    }
    public function delete(Request $request)
    {
        $hapus = Fasilitas::findOrFail($request->id);
        $hapus->delete();
        return redirect()->route('lihatKost');
    }
    public function lihat()
    {
        $lihat = Review::all();
        return view('pemilik.lihatReview', compact('lihat'));

    }

    public function lihatAlamat()
    {
        $lihat = Alamat::all();
        return view('pemilik.lihatAlamat', compact('lihat'));

    }


}
