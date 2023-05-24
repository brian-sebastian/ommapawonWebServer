@extends('konsumen.layouts_konsumen.main')


@section('container')
    
    <div class="text-center pt-3 pb-2 mb-3">
        <h4>Edit Data konsumen</h4>
    </div>

    <div class="container col-lg-8">
        <form method="post" action="/konsumen/{{ $konsumen->id }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="nama_konsumen" class="form-label">Nama Konsumen</label>
              <input type="text" class="form-control @error('nama_konsumen') is-invalid @enderror" id="nama_konsumen" name="nama_konsumen" required autofocus value="{{ old('nama_konsumen', $konsumen->nama_konsumen) }}">
              @error('nama_konsumen')
                  <div class="invalid-feedback">
                      <p class="text-dark">{{ $message }}</p>
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email', $konsumen->email) }}">
              @error('email')
                  <div class="invalid-feedback">
                      <p class="text-dark">{{ $message }}</p>
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="nomor_telpon" class="form-label">Nomor Telpon</label>
              <input type="text" class="form-control @error('nomor_telpon') is-invalid @enderror" id="nomor_telpon" name="nomor_telpon" value="{{ old('nomor_telpon', $konsumen->nomor_telpon) }}">
              @error('nomor_telpon')
                <div class="invalid-feedback">
                    <p class="text-dark">{{ $message }}</p>
                </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit Konsumen</button>
        </form>
    </div>
    
@endsection