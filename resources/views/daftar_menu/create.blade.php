@extends('daftar_menu.layouts_daftarMenu.main')


@section('container')

    <div class="text-center pt-3 pb-2 mb-3">
        <h4>Tambah Data Menu</h4>
    </div>

    <div class="container col-lg-8">
        <form action="/daftar_menu" method="post" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="nama_makanan" class="form-label">Nama Makanan</label>
              <input type="text" class="form-control @error('nama_makanan') is-invalid @enderror" id="nama_makanan" name="nama_makanan" required autofocus value="{{ old('nama_makanan') }}">
              @error('nama_makanan')
                  <div class="invalid-feedback">
                      <p class="text-dark">{{ $message }}</p>
                  </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Foto Makanan</label>
                <img class="img-preview img-fluid mb-3 col-sm-2">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" required onchange="previewImage()">
                @error('image')
                  <div class="invalid-feedback">
                      <p class="text-dark">{{ $message }}</p>
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="harga" class="form-label">Harga</label>
              <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" required value="{{ old('harga') }}">
              @error('harga')
                  <div class="invalid-feedback">
                      <p class="text-dark">{{ $message }}</p>
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Deskripsi</label>
              <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" value="{{ old('deskripsi') }}">
              @error('deskripsi')
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
            <div class="mb-3">
              <label for="kategori" class="form-label">Kategori</label>
              <select class="form-select" name="id_kategori">
                @foreach ($kategoris as $rm)
                  <option value="{{ $rm->id }}">{{ $rm->kategori_nama }}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="menu_ketersediaan" class="form-label">Ketersediaan</label>
              <select class="form-select" name="menu_ketersediaan">
                  <option value="1">Bersedia</option>
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