@extends('admin.layout')
@section('Konten')

    <head>
    </head>

    <body>
        <div class="content-wrapper">
            <div class="container card shadow p-4">
                <h2 class="mx-10 mb-2 text-titlecase mb-4">Daftar Kost</h2>
                <div class="row mx-10">
                    <div class="col-md-12 mx-10">
                        <div class="card">
                            <div class="table-responsive pt-3">
                                <table class="table table-striped project-orders-table">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Deskripsi</th>
                                            <th>Harga Per Bulan</th>
                                            {{-- <th>Url_Gambar</th> --}}
                                            <th>Jenis</th>
                                            <th>Id_pemilik</th>
                                            <th>No Telepon</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lihat as $lht)
                                            <tr>
                                                <td>{{ $lht->nama }}</td>
                                                <td>{{ $lht->deskripsi }}</td>
                                                <td> Rp {{ number_format($lht->harga_per_bulan, 0, ',', '.') }}</td>
                                                <td>{{ $lht->jenis }}</td>
                                                <td>{{ $lht->id_pemilik }}</td>
                                                <td>{{ $lht->no_telepon }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
@endsection
