<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Menu;
use App\Models\Pesan;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

        // User
        User::create([
            'nama' => 'Admin',
            'username' => 'Danang97',
            'password' => Hash::make('Danang97'),
            'role' => 0
        ]);

        Kategori::create([
            'nama' => 'Cemilan',
        ]);

        Kategori::create([
            'nama' => 'Minuman',
        ]);

        Kategori::create([
            'nama' => 'Makanan',
        ]);

        Menu::create([
            'nama' => 'Kentang Goreng',
            'harga' => '5000',
            'deskripsi' => 'Lorem ipsum',
            'kategori' => 'Cemilan',
            'gambar' => 'bread-barrel.jpg'
        ]);

        Menu::create([
            'nama' => 'Kentang Goreng',
            'harga' => '5000',
            'deskripsi' => 'Lorem ipsum',
            'kategori' => 'Cemilan',
            'gambar' => 'bread-barrel.jpg'
        ]);

        Menu::create([
            'nama' => 'Kentang Goreng',
            'harga' => '5000',
            'deskripsi' => 'Lorem ipsum',
            'kategori' => 'Cemilan',
            'gambar' => 'bread-barrel.jpg'
        ]);

        Menu::create([
            'nama' => 'Soda',
            'harga' => '7000',
            'deskripsi' => 'Lorem ipsum',
            'kategori' => 'Minuman',
            'gambar' => 'soda.jpg'
        ]);

        Menu::create([
            'nama' => 'Soda',
            'harga' => '7000',
            'deskripsi' => 'Lorem ipsum',
            'kategori' => 'Minuman',
            'gambar' => 'soda.jpg'
        ]);

        Menu::create([
            'nama' => 'Soda',
            'harga' => '7000',
            'deskripsi' => 'Lorem ipsum',
            'kategori' => 'Minuman',
            'gambar' => 'soda.jpg'
        ]);

        Menu::create([
            'nama' => 'Mie Goreng',
            'harga' => '10000',
            'deskripsi' => 'Lorem ipsum',
            'kategori' => 'Makanan',
            'gambar' => 'mie.jpg'
        ]);

        Menu::create([
            'nama' => 'Mie Goreng',
            'harga' => '10000',
            'deskripsi' => 'Lorem ipsum',
            'kategori' => 'Makanan',
            'gambar' => 'mie.jpg'
        ]);

        Menu::create([
            'nama' => 'Mie Goreng',
            'harga' => '10000',
            'deskripsi' => 'Lorem ipsum',
            'kategori' => 'Makanan',
            'gambar' => 'mie.jpg'
        ]);

        Pesan::create([
            'nama' => 'Irwan Saputra',
            'nomeja' => '01',
            'orang' => '6',
            'pesanan' => 'Mie goreng, soda, kentang goreng',
            'status' => '1',
        ]);

        Pesan::create([
            'nama' => 'Danang Adam',
            'nomeja' => '02',
            'orang' => '6',
            'pesanan' => 'Mie goreng, soda, kentang goreng',
            'status' => '1',
        ]);

        Pesan::create([
            'nama' => 'Rian Dmasih',
            'nomeja' => '03',
            'orang' => '6',
            'pesanan' => 'Mie goreng, soda, kentang goreng',
            'status' => '1',
        ]);

        Pesan::create([
            'nama' => 'Faris',
            'nomeja' => '04',
            'orang' => '6',
            'pesanan' => 'Mie goreng, soda, kentang goreng',
            'status' => '2',
        ]);

        Pesan::create([
            'nama' => 'Mayang',
            'nomeja' => '05',
            'orang' => '6',
            'pesanan' => 'Mie goreng, soda, kentang goreng',
            'status' => '2',
        ]);

        Pesan::create([
            'nama' => 'Zidan',
            'nomeja' => '06',
            'orang' => '6',
            'pesanan' => 'Mie goreng, soda, kentang goreng',
            'status' => '2',
        ]);
    }
}
