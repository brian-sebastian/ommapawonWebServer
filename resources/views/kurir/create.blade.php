@extends('kurir.layouts_kurir.main')


@section('container')

    <div class="text-center pt-3 pb-2 mb-3">
        <h4>Tambah Data Kurir</h4>
    </div>

    <div class="container col-lg-8">
        <form action="/kurir" method="post" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="nama_kurir" class="form-label">Nama Kurir</label>
              <input type="text" class="form-control @error('nama_kurir') is-invalid @enderror" id="nama_kurir" name="nama_kurir" required autofocus value="{{ old('nama_kurir') }}">
              @error('nama_kurir')
                  <div class="invalid-feedback">
                      <p class="text-dark">{{ $message }}</p>
                  </div>
              @enderror
            </div>
            {{-- <div class="mb-3">
                <label for="image" class="form-label">Foto Makanan</label>
                <img class="img-preview img-fluid mb-3 col-sm-2">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" required onchange="previewImage()">
                @error('image')
                  <div class="invalid-feedback">
                      <p class="text-dark">{{ $message }}</p>
                  </div>
              @enderror
            </div> --}}
            <div class="mb-3">
              <label for="nomor_telp_kurir" class="form-label">Nomor Telpon</label>
              <input type="input" class="form-control @error('nomor_telp_kurir') is-invalid @enderror" id="nomor_telp_kurir" name="nomor_telp_kurir" required value="{{ old('nomor_telp_kurir') }}">
              @error('nomor_telp_kurir')
                  <div class="invalid-feedback">
                      <p class="text-dark">{{ $message }}</p>
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="email_kurir" class="form-label">Email</label>
              <input type="text" class="form-control @error('email_kurir') is-invalid @enderror" id="email_kurir" name="email_kurir" value="{{ old('email_kurir') }}">
              @error('email_kurir')
                <div class="invalid-feedback">
                    <p class="text-dark">{{ $message }}</p>
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="rumah_makan" class="form-label">Rumah Makan</label>
              <select class="form-select" name="id_restoran">
                @foreach ($rumah_makans as $rm)
                  <option value="{{ $rm->id }}">{{ $rm->restoran_nama }}</option>
                @endforeach
              </select>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Menu Makanan</button>
        </form>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imagePreview = document.querySelector('.img-preview');

            imagePreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imagePreview.src = oFREvent.target.result;
            };
        }
    </script>


@endsection