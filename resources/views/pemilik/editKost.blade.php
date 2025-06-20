@extends('pemilik.layout')
@section('Konten')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit Kost</title>

    </head>

    <body>
        <div class="content-wrapper">
            <div class="container card shadow p-4">
                <h2 class="mx-10 mb-2 text-titlecase mb-4">Edit Kost</h2>
                <hr>
                <form method="post">
                    @csrf

                    <div class="mb-3 mx-5">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control form-control-user" name="nama"
                            value="{{ $data->nama }}" placeholder="Nama">
                    </div>
                    <div class="mb-3 mx-5">
                        <label for="name" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control form-control-user" name="deskripsi"
                            value="{{ $data->deskripsi }}" placeholder="Deskripsi">
                    </div>
                    <div class="mb-3 mx-5">
                        <label for="name" class="form-label">Harga Per Bulan</label>
                        <input type="text" class="form-control form-control-user" name="harga_per_bulan"
                            value="{{ $data->harga_per_bulan }}" placeholder="0000">
                    </div>
                    <div class="mb-3 mx-5">
                        <label for="name" class="form-label">No Telepon</label>
                        <input type="text" class="form-control form-control-user" name="no_telepon"
                            value="{{ $data->no_telepon }}" placeholder="0000">
                    </div>
                    <div class="mb-3  mx-5">
                    <select name="jenis" id="">
                        <option value="putra">Putra</option>
                        <option value="putri">Putri</option>
                        <option value="campur">Campur</option>
                    </select>
                </div>

                    {{-- <div class="mb-3 mx-5">
                        <label for="name" class="form-label">Image Url</label>
                        <input type="text" class="form-control form-control-user" name="image_url"
                            value="{{ $data->image_url }}" placeholder="https://">
                    </div> --}}

                    <button class="mb-3 mx-5 btn btn-success" type="submit">Simpan</button>
                </form>
                <button class="btn btn-danger mb-3 mx-5" onclick="window.location.href='/lihatItem'">Kembali</button>
            </div>

        </div>

    </body>
@endsection
