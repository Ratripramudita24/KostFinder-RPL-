    @extends('pemilik.layout')
    @section('Konten')

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Tambah Kost</title>

        </head>

        <body>
            <div class="content-wrapper">
                <div class="container card shadow p-4">
                    <h2 class="mx-10 text-titlecase ">Tambah Kost</h2>
                    <hr>
                    <form action="{{ route('simpanKost') }}" method="post">
                        @csrf

                        <div class="mb-3 mx-5">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama">
                        </div>
                        <div class="mb-3 mx-5">
                            <label for="name" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control form-control-user" name="deskripsi"
                                placeholder="Deskripsi">
                        </div>
                        <div class="mb-3 mx-5">
                            <label for="name" class="form-label">Harga Per Bulan</label>
                            <input type="text" class="form-control form-control-user" name="harga_per_bulan"
                                placeholder="Harga">
                        </div>
                        <div class="mb-3 mx-5">
                            <label for="name" class="form-label">No Telepon</label>
                            <input type="text" class="form-control form-control-user" name="no_telepon"
                                placeholder="no_telepon">
                        </div>
                        <div class="mb-3 mx-5">
                            <label for="name" class="form-label">Alamat</label>
                            <input type="text" class="form-control form-control-user" name="alamat"
                                placeholder="alamat">
                        </div>
                        <div class="mb-3  mx-5">
                            <select name="jenis" class="form-select" multiple aria-label="multiple select example">
                                <option value="putra">Putra</option>
                                <option value="putri">Putri</option>
                                <option value="campur">Campur</option>
                            </select>
                        </div>
                        <div class="mb-4 mx-4">
                            <label for=""> </label>
                            @forelse ($fasilitas as $fts)
                                <div class="form-check">
                                    <input name="id_fasilitas[]" class="form-check-input" type="checkbox"
                                        value="{{ $fts->id }}" id="fasilitas-{{ $fts->id }}">
                                    <label class="form-check-label" for="fasilitas-{{ $fts->id }}">
                                        {{ $fts->nama_fasilitas }}
                                    </label>

                                </div>
                            @empty
                                <p class="text-muted">Tidak Ada</p>
                            @endforelse
                        </div>
                        <button class="mb-3 mx-5 btn btn-success" type="submit">Simpan</button>
                    </form>
                    <button class="btn btn-danger mb-3 mx-5" onclick="window.location.href='/lihatKost">Kembali</button>
                </div>

            </div>

        </body>
    @endsection
