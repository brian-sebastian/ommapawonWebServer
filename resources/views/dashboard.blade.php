@extends('layouts.main')


@section('container')
@if (session()->has('success'))
    <div class="alert alert-success col-lg-11" role="alert">
      {{ session('success') }}
    </div>
  @endif
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                     
                      <h5 class="card-title text-center">Pesanan Masuk Hari Ini</h5>
                      <form method="get" action="/">
                        @method('put')
                            @csrf
                        @if($orderantrian->count() > 0)
                            
                                @foreach($orderantrian as $detailOrder)
                                        <h6 class="card-subtitle mb-2 text-muted" style="text-align: right"><small>
                                            {{ $detailOrder->created_at }}
                                        </small></h6>
                                        <p class="card-text"><i class="fa-solid fa-user"></i> 
                                            {{ $detailOrder->konsumen['nama_konsumen'] }} 
                                            <br> 
                                            {{ $detailOrder->konsumen['nomor_telpon'] }}
                                        </p>
                                        
                                        <p class="card-text"><i class="fa-solid fa-file-lines"></i> 
                                        
                                            {{ $detailOrder->order_detail[0]->nama_makanan }} 
                                            <br> Qty : {{ $detailOrder->order_detail[0]->pivot->qty }}
                                        </p>
                                        
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-warning border">
                                                <a href="/pesanan" class="card-link text-dark text-decoration-none">Detail Pesanan</a>
                                            </button>
                                            <button class="btn btn-success border">
                                                <a href="/dashboard/{{ $detailOrder->id }}/edit" class="card-link text-dark text-decoration-none">Terima</a>
                                            </button>
                                        </div>
                                        <hr>

                                @endforeach
                               
                                
                            @else
                                <h3>Tidak ada pesanan</h3>
                        @endif
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title mb-4">Rumah Makan </h5>
                      @foreach($restorans as $rm)
                      <form   method="post" action="/dashboard/{{ $rm->id }}">
                        <div class="mb-3">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            {{ $rm->restoran_status }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                          </div>
                     
                    </form>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title text-center">Pembayaran Transfer</h5>
                    
                      <form method="get" action="/">
                        @method('put')
                        @csrf
                        @if($ordermenunggu->count() > 0)
                        
                            @foreach($ordermenunggu as $transfer)
                           
                             <h6 class="card-subtitle mb-2 text-muted" style="text-align: right"><small> 
                                {{ $transfer->created_at }}
                            </small></h6>
                            <p class="card-text"><i class="fa-solid fa-user"></i> 
                                {{ $transfer->konsumen->nama_konsumen }}
                                <br> 
                                {{ $transfer->konsumen->nomor_telpon }}</p>
                            <p class="card-text">
                                Biaya :  {{ $transfer->order_detail[0]->pivot->harga }}
                            </p>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-warning border">
                                    <a href="/pesanan" class="card-link text-dark text-decoration-none">Detail Pesanan</a>
                                </button>
                                <button class="btn btn-success border">
                                    <a href="/dashboard/{{ $transfer->id }}/edit" class="card-link text-dark text-decoration-none">Terima</a>
                                </button>
                                <hr> 
                            
                            
                            @endforeach
                        @else
                            <h3> Tidak ada yang transfer</h3>
                        @endif
                       
                    </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
