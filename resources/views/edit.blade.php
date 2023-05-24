@extends('daftar_menu.layouts_daftarMenu.main')


@section('container')
    
    <div class="text-center pt-3 pb-2 mb-3">
        <h4>Pesanan</h4>
    </div>

    <div class="container col-lg-8">
        <form method="post" action="/dashboard/{{ $detailpesanan->id }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="nama_konsumen" class="form-label">Nama Konsumen</label>
              <input type="text" class="form-control @error('nama_konsumen') is-invalid @enderror" id="nama_konsumen" name="nama_konsumen" required autofocus value="{{ old('nama_konsumen', $detailpesanan->konsumen->nama_konsumen) }}" disabled>
              @error('nama_konsumen')
                  <div class="invalid-feedback">
                      <p class="text-dark">{{ $message }}</p>
                  </div>
              @enderror
            </div>

            <div class="mb-3">
                <label for="nomor_telpon" class="form-label">Nomor Telpon</label>
                <input type="text" class="form-control @error('nomor_telpon') is-invalid @enderror" id="nomor_telpon" name="nomor_telpon" required autofocus value="{{ old('nomor_telpon', $detailpesanan->konsumen->nomor_telpon) }}" disabled>
                @error('nomor_telpon')
                    <div class="invalid-feedback">
                        <p class="text-dark">{{ $message }}</p>
                    </div>
                @enderror
              </div>

            
              <div class="mb-3">
                <label for="nama_makanan" class="form-label">Nama Makanan</label>
                <input type="text" class="form-control @error('nama_makanan') is-invalid @enderror" id="nama_makanan" name="nama_makanan" required value="{{ old('nama_makanan', $detailpesanan->order_detail[0]->nama_makanan) }}" disabled>
                @error('nama_makanan')
                    <div class="invalid-feedback">
                        <p class="text-dark">{{ $message }}</p>
                    </div>
                @enderror
              </div>

            <div class="mb-3">
              <label for="qty" class="form-label">Qty</label>
              <input type="text" class="form-control @error('qty') is-invalid @enderror" id="qty" name="qty" required value="{{ old('qty', $detailpesanan->order_detail[0]->pivot->qty) }}" disabled>
              @error('qty')
                  <div class="invalid-feedback">
                      <p class="text-dark">{{ $message }}</p>
                  </div>
              @enderror
            </div>
            
            <div class="mb-3">
              <label for="harga" class="form-label">Harga</label>
              <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" required value="{{ old('harga', $detailpesanan->order_detail[0]->pivot->harga) }}" disabled>
              @error('harga')
                  <div class="invalid-feedback">
                      <p class="text-dark">{{ $message }}</p>
                  </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="rumah_makan" class="form-label">Status</label>
                <select class="form-select" name="order_status" value="{{ old('order_status', $detailpesanan->order_status) }}">

                  <option value="menunggu">Menunggu</option>
                  <option value="proses">Proses</option>
                  <option value="antrian">Antrian</option>
                </select>
              </div>
            <button type="submit" class="btn btn-primary">Edit Status</button>
        </form>
    </div>


@endsection