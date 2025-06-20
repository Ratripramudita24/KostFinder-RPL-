@extends('pemilik.layout')
@section('Konten')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tambah Fasilitas</title>

    </head>

    <body>
        <div class="content-wrapper">
            <div class="container card shadow p-4">
                <h2 class="mx-10 text-titlecase ">Tambah Fasilitas</h2>
                <hr>
                <form action="{{ route('simpanFasilitas') }}" method="post">
                    @csrf

                    <div class="mb-3 mx-5">
                        <label for="name" class="form-label">Nama Fasilitas</label>
                        <input type="text" class="form-control form-control-user" name="nama_fasilitas" placeholder="Fasilitas">
                    </div>

                    <button class="mb-3 mx-5 btn btn-success" type="submit">Simpan</button>
                </form>
                <button class="btn btn-danger mb-3 mx-5" onclick="window.location.href='/lihatKost">Kembali</button>
            </div>

        </div>

    </body>
@endsection
