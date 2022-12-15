@extends('layout.app')
@section('content')
<head>
    <meta charset="utf8">
</head>
<body>
    <h1 class="text-center mb-4">Edit Data</h1>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card text-justify">
                    <div class="card-body">
                        <form action="/mid/updatedata/{{ $data->id }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Judul</label>
                              <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->judul }}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Isi</label>
                                <input type="textarea" name="isi" class="form-control" id="exampleInputEmail1" value="{{ $data->isi }}" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Penulis</label>
                                <input type="text" name="penulis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->penulis }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                                <input type="textarea" name="keterangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->keterangan }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
                                <input type="number" name="tahun_terbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->tahun_terbit }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

</body>
@endsection
