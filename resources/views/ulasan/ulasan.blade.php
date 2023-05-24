@extends('layouts.main')


@section('container')
<div class="table-responsive col-lg-10">
  @if ($ulasans->count() > 0)
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>NO</th>
        <th>Nama Konsumen</th>
        <th>Ulasan</th>
      </tr>
    </thead>
    <tbody>
      @foreach($ulasans as $ulasan)
      <tr>
        <th>{{ $loop->iteration }}</th>
        <td>{{ $ulasan->id_konsumen }}</td>
        <td>{{ $ulasan->ulasan }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
     
  @else
      <h3>Tidak Ada Data Ulasan</h3>
  @endif
  </div>

  <div class="d-flex justify-content-center">
    {{ $ulasans->links() }}
  </div>

@endsection
