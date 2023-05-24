@extends('kurir.layouts_kurir.main')


@section('container')
    
    <div class="text-center pt-3 pb-2 mb-3">
        <h4>Edit Data Kurir</h4>
    </div>

    <div class="container col-lg-8">
        <form method="post" action="/kurir/{{ $kurir->id }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="nama_kurir" class="form-label">Nama kurir</label>
              <input type="text" class="form-control @error('nama_kurir') is-invalid @enderror" id="nama_kurir" name="nama_kurir" required autofocus value="{{ old('nama_kurir', $kurir->nama_kurir) }}">
              @error('nama_kurir')
                  <div class="invalid-feedback">
                      <p class="text-dark">{{ $message }}</p>
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="email_kurir" class="form-label">Email</label>
              <input type="text" class="form-control @error('email_kurir') is-invalid @enderror" id="email_kurir" name="email_kurir" required value="{{ old('email_kurir', $kurir->email_kurir) }}">
              @error('email_kurir')
                  <div class="invalid-feedback">
                      <p class="text-dark">{{ $message }}</p>
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="nomor_telp_kurir" class="form-label">Nomor Telpon</label>
              <input type="text" class="form-control @error('nomor_telp_kurir') is-invalid @enderror" id="nomor_telp_kurir" name="nomor_telp_kurir" value="{{ old('nomor_telp_kurir', $kurir->nomor_telp_kurir) }}">
              @error('nomor_telp_kurir')
                <div class="invalid-feedback">
                    <p class="text-dark">{{ $message }}</p>
                </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit kurir</button>
        </form>
    </div>
    
@endsection