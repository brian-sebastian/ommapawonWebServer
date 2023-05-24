@extends('layouts.main')

<?php 
function convert_to_rupiah($angka)
{
    $agk =   substr($angka, 0, -3);
    return       'Rp. '.strrev(implode('',str_split(strrev(strval($agk)),3)));
}
function to_rupiah($angka)
{
    
    return       'Rp. '.strrev(implode('',str_split(strrev(strval($angka)),3)));
}
?>

@section('container')
<div class="table-responsive col-lg-10">
  @if ($dataProfitBulanan->count() > 0)
      
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>NO</th>
        <th data-sort-initial="true" data-toggle="true">Bulan</th>
        <th data-sort-initial="true" data-toggle="true">Keuntungan</th>
      </tr>
    </thead>
    <tbody>
      @foreach($dataProfitBulanan as $penghasilan_bulanan)
      <tr>
        <th>{{ $loop->iteration }}</th>
        <td>{{ $penghasilan_bulanan->months }}</td>
        <td><?php echo to_rupiah($penghasilan_bulanan->total)?></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
    <p>Tidak Ada Data Penghasilan</p>
  @endif
  </div>

  <div class="d-flex justify-content-center">
    {{ $penghasilan_bulanans->links() }}
  </div>

@endsection
