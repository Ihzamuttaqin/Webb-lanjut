@extends('layout.app')
@section('content')
<a href="/tambahsoal" class="btn btn-success">Tambah</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">Nama Matakuliah</th>
        <th scope="col">Dosen</th>
        <th scope="col">Jumlah Soal</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Create</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
            <td>{{ ++$id }}</td>
            <td>{{ $d->nama_mk }}</td>
            <td>{{ $d->dosen }}</td>
            <td>{{ $d->jumlah_soal }}</td>
            <td>{{ $d->keterangan }}</td>
            <td>{{ $d->created_at }}</td>
            <td>
                <a href="{{ route('soal.edit',$d->id) }}" class="btn btn-info">Edit</a>
                <form action="{{ route('soal.delete', $d->id ) }}" class="btn btn-danger">Delete
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>
  </table>


@endsection
