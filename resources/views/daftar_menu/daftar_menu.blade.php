@extends('layouts.main')


@section('container')
  
  <h4>
    <a href="/daftar_menu/create" class="badge bg-success mb-2"><i class="fa-solid fa-square-plus"></i></a>
    Tambah Makanan
  </h4>

  @if (session()->has('success'))
    <div class="alert alert-success col-lg-11" role="alert">
      {{ session('success') }}
    </div>
  @endif
             
  <div class="table-responsive col-lg-11">
    <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>NO</th>
            <th>Gambar</th>
            <th>Nama Makanan</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($menus as $menu)
          <tr>
            <th>{{ $loop->iteration }}</th>
            <td>
              @if ($menu->image)
                <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" width="100px">
              @endif
            </td>
            <td>{{ $menu->nama_makanan }}</td>
            <td>{{ $menu->harga }}</td>
            <td>{{ $menu->deskripsi }}</td>
            <td>
                <a href="/daftar_menu/{{ $menu->id }}/edit" class="badge bg-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                <form action="/daftar_menu/{{ $menu->id }}" method="POST" class="d-inline">
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
    {{ $menus->links() }}
  </div>

@endsection





{{-- {{ route('daftar_menu.destroy', $menu->id) }} --}}