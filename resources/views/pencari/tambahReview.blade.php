@extends('pencari.layout')
@section('Konten')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tambah Review</title>

    </head>

    <body>
        <div class="content-wrapper">
            <div class="container card shadow p-4">
                <h2 class="mx-10 text-titlecase ">Tambah Review</h2>
                <hr>
                <form action="{{ route('simpanReview', $id) }}" method="post">
                    @csrf

                    <div class="mb-3 mx-5">
                        <label for="name" class="form-label">Nama Review</label>
                        <input type="text" class="form-control form-control-user" name="komentar" placeholder="Review">
                    </div>

                    <button class="mb-3 mx-5 btn btn-success" type="submit">Simpan</button>
                </form>
                <button class="btn btn-danger mb-3 mx-5" onclick="window.location.href='/telusuriKost">Kembali</button>
            </div>

        </div>

    </body>
@endsection
