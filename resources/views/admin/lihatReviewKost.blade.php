@extends('admin.layout')
@section('Konten')

    <head>
    </head>

    <body>
        <div class="content-wrapper">
            <div class="container card shadow p-4">
                <h2 class="mx-10 mb-2 text-titlecase mb-4">List Review</h2>
                <div class="row mx-10">
                    <div class="col-md-12 mx-10">
                        <div class="card">
                            <div class="table-responsive pt-3">
                                <table class="table table-striped project-orders-table">
                                    <thead>
                                        <tr>
                                            <th>Nama Kost</th>
                                            <th>Nama Pencari</th>
                                            <th>Komentar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lihat as $lht)
                                            <tr>
                                                <td>{{ $lht->kost->nama}}</td>
                                                <td>{{ $lht->user->nama }}</td>
                                                <td>{{ $lht->komentar }}</td>
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
