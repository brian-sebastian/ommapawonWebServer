<?php

namespace Database\Seeders;

use App\DetailOrder;
use App\Konsumen as AppKonsumen;
use App\Kurir as AppKurir;
use App\Menu as AppMenu;
use App\Models\Detail_pesanan;
use App\Models\Food;
use App\Models\Menu;
use App\Models\User;
use App\Models\Kurir;
use App\Models\Konsumen;
use App\Models\Penghasilan_Bulanan;
use App\Models\Penghasilan_Harian;
use App\Models\Pesanan;
use App\Models\RumahMakan;
use App\Models\Ulasan;
use App\Order;
use App\Profit;
use App\Restoran;
use App\Uat;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        AppMenu::create([
            'rumah_makan_id' => 1,
            'image' => 'nasigoreng.jpeg',
            'nama_makanan' => 'Nasi Goreng',
            'harga' => '13000',
            'deskripsi' => 'Nasi Goreng + Ayam + Bawang Goreng + Timun + Cabe'

        ]);

        AppMenu::create([
            'rumah_makan_id' => 1,
            'image' => 'capjay.jpeg',
            'nama_makanan' => 'Cap Jay',
            'harga' => '21000',
            'deskripsi' => 'Sawi + Wortel'

        ]);

        AppKonsumen::create([
            'nama_konsumen' => 'Maulana Brian Sebastian',
            'email' => 'maulanabrian56@gmail.com',
            'nomor_telpon' => '089515314512'
        ]);

        AppKonsumen::create([
            'nama_konsumen' => 'Priyanka Puji Rahayu',
            'email' => 'priyanka@gmail.com',
            'nomor_telpon' => '085806742996'
        ]);

        AppKurir::create([
            'detail_pesanan_id' => 1,
            'nama_kurir' => 'Moise Kean',
            'email_kurir' => 'moisekean@gmail.com',
            'nomor_telp_kurir' => '083766742795'
        ]);
       
        Uat::create([
            'konsumen_id' => 1,
            'ulasan' => 'Nasi Gorengnya sangat enak sekali...'
        ]);

        Order::create([
            'konsumen_id' => 1,
            'detail_pesanan_id' => 1,
            'pesanan_latitude'=>'-7.400598',
            'pesanan_longitude'=>'112.721336',
            'jumlah_pesanan' => 2,
            'alamat_pesanan' => 'Jl.Mangga III',
            'metode_bayar' => 'cash',
            'jarak_antar' => 5.46,
            'biaya_antar' => 5000.00,
            'status_pesanan' => 'sukses',
            'tanggal_pesanan' => '2022/06/20 10:52:10'
        ]);

        Restoran::create([
            'nama_rumah_makan' => 'Omma Pawon',
            'latitude' => '-7.400598',
            'longitude' => '112.721336',
            'alamat' => 'Jl.Mangga III Blok F9',
            'jarak_pesanan' => 6
        ]);

        DetailOrder::create([
            'menu_id' => 1,
            'qty' => 2,
            'harga' => '13000'
        ]);

        Profit::create([
            'pesanan_id' => 1,
            'penghasilan' => 64000,
            'status' => 'sukses',
            'tgl_penghasilan' => '2022/06/20 10:52:10'
        ]);

        // Penghasilan_Bulanan::create([
        //     'bulan' => 'Juni, 2022',
        //     'keuntungan' => '64000'
        // ]);

    }
}
