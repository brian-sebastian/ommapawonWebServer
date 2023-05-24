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
<h5 class="txt-dark">Penghasilan {{ date('d/m/Y')}}</h5>
<div class="table-responsive col-lg-10">
  @if ($dataProfitHarian->count() > 0)
      
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>NO</th>
        <th data-sort-initial="true" data-toggle="true">Nama Konsumen</th>
        <th>Jumlah</th>
        <th>Status</th>
        <th>Tanggal Pesanan</th>
      </tr>
    </thead>
    <tbody>
      @foreach($dataProfitHarian as $penghasilan_harian)
      <tr>
        <th>{{ $loop->iteration }}</th>
        <td>{{ $penghasilan_harian->order->konsumen->nama_konsumen }}</td>
        <td><?php echo to_rupiah($penghasilan_harian->biaya)?></td>
        <td> 
          @if($penghasilan_harian->status == 'batal')
              <span class="badge bg-danger">{{$penghasilan_harian->status}}</span>
          @else
              <span class="badge bg-success">{{$penghasilan_harian->status}}</span>
          @endif
        </td>
        <td>{{$penghasilan_harian->created_at->format('d/m/Y H:m:s')}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  @else
    <h3>Tidak ada data penghasilan</h3>
  @endif
  </div>
  
  {{-- <br>
  <br>
  
  <h5 class="txt-dark">Penghasilan {{ date('d/m/Y',strtotime("-1 days"))}}</h5>
  <div class="table-responsive col-lg-10">
    @if ($dataProfitHarian->count() > 0)
        
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>NO</th>
          <th data-sort-initial="true" data-toggle="true">Nama Konsumen</th>
          <th>Jumlah</th>
          <th>Status</th>
          <th>Tanggal Pesanan</th>
        </tr>
      </thead>
      <tbody>
        @foreach($dataProfitHarian as $penghasilan_harian)
        <tr>
          <th>{{ $loop->iteration }}</th>
          <td>{{ $penghasilan_harian->order->konsumen->nama_konsumen }}</td>
          <td>
            <?php //echo to_rupiah($penghasilan_harian->biaya)?>
          </td>
          <td> 
            @if($penghasilan_harian->status == 'batal')
                <span class="badge bg-danger">{{$penghasilan_harian->status}}</span>
            @else
                <span class="badge bg-success">{{$penghasilan_harian->status}}</span>
            @endif
          </td>
          <td>{{$penghasilan_harian->created_at->format('d/m/Y H:m:s')}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  
    @else
      <h3>Tidak ada data penghasilan</h3>
    @endif
    </div> --}}

  <div class="d-flex justify-content-center">
    {{ $penghasilan_harians->links() }}
  </div>

@endsection
