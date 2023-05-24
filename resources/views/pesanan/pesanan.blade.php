@extends('layouts.main')


@section('container')
<div class="table-responsive col-lg-10">
  @if($pesanans->count() > 0)
    <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>NO</th>
            <th>Nama Makanan</th>
            <th>Jumlah</th>
            <th>Status</th>
            <th>Tanggal Pesanan</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pesanans as $pesanan)
          <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $pesanan->menu->nama_makanan }}</td>
            <td>{{ $pesanan->qty }}</td>
            <td>{{ $pesanan->order->order_status }}</td>
            <td>{{ $pesanan->created_at->format('d/m/Y H:m:s') }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
          
      @else
          <h3>Tidak Ada Data Pesanan</h3>
      @endif
  </div>

  <div class="d-flex justify-content-center">
    {{ $pesanans->links() }}
  </div>


@endsection
