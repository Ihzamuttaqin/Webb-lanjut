@extends('layout.app')
@section('content')
<head>
    <meta charset="utf8">
</head>
<body>
    <h1 class="text-center mb-4">Tambah Data Mata Kuliah</h1>

    <div class="container justify-content-center">

        <div class="col-5">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="/insertdata" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Nama Mata Kuliah</label>
                              <input type="text" name="nama_mk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Dosen</label>
                                <input type="text" name="dosen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jumlah Soal</label>
                                <input type="number" name="jumlah_soal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                                <input type="textarea " name="keterangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
