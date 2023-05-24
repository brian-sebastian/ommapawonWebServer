@extends('layouts.main')


@section('container')
{{-- <h4>
  <a href="/kurir/create" class="badge bg-success mb-2"><i class="fa-solid fa-square-plus"></i></a>
  Tambah Kurir
</h4> --}}
<div class="table-responsive col-lg-10">
    <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>NO</th>
            <th>Nama Kurir</th>
            <th>Email</th>
            <th>Nomor Telpon</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($kurirs as $kurir)
          <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $kurir->nama_kurir }}</td>
            <td>{{ $kurir->email_kurir }}</td>
            <td>{{ $kurir->nomor_telp_kurir }}</td>
            <td>
                {{-- <a href="/kurir/{{ $kurir->id }}/edit" class="badge bg-warning"><i class="fa-solid fa-pen-to-square"></i></a> --}}
                <form action="/kurir/{{ $kurir->id }}" method="POST" class="d-inline">
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
    {{ $kurirs->links() }}
  </div>


@endsection
