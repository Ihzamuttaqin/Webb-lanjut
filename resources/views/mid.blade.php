@extends('layout.app')
@section('content')
<a href="/mid/form-tambah" class="btn btn-success">Tambah</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">Judul</th>
        <th scope="col">Isi</th>
        <th scope="col">Penulis</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Tahun Terbit</th>
        <th scope="col">Create</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
            <td>{{ ++$id }}</td>
            <td>{{ $d->judul }}</td>
            <td>{{ $d->isi }}</td>
            <td>{{ $d->penulis }}</td>
            <td>{{ $d->keterangan }}</td>
            <td>{{ $d->tahun_terbit }}</td>
            <td>{{ $d->created_at->format('D M Y') }}</td>
            <td>
                <a href="/mid/tampildata/{{ $d->id }}" class="btn btn-info">Edit</a>
                <a href="/mid/delete/{{ $d->id }}"  class="btn btn-danger">Delete</a>

            </td>
        </tr>

        @endforeach
    </tbody>
  </table>


@endsection
