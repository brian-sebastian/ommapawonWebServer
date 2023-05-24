@extends('layouts.main')


@section('container')
<div class="table-responsive col-lg-10">
    <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>NO</th>
            <th>Nama Konsumen</th>
            <th>Email</th>
            <th>Nomor Telpon</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($konsumens as $konsumen)
          <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $konsumen->nama_konsumen }}</td>
            <td>{{ $konsumen->email }}</td>
            <td>{{ $konsumen->nomor_telpon }}</td>
            <td>
                {{-- <a href="/konsumen/{{ $konsumen->id }}/edit" class="badge bg-warning"><i class="fa-solid fa-pen-to-square"></i></a> --}}
                <form action="/konsumen/{{ $konsumen->id }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Apakah ingin menghapus data ?')"><i class="fa-solid fa-trash-can"></i></button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </div>

  <div class="d-flex justify-content-center">
    {{ $konsumens->links() }}
  </div>


@endsection
