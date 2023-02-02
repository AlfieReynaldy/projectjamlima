<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use App\Models\Penerbit;
use App\Models\Buku;
use App\Models\Identitas;
use App\Models\Pemberitahuan;
use App\Models\User;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Hash;
use App\Models\Pesan;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       //USER
        User::Create([
            'kode' => 'Admin1',
            'nis' => '1010209',
            'fullname' => 'Yer Manha',
            'username' => 'Yer',
            'password' => Hash::make("password"),
            'kelas' => 'XII-RPL',
            'alamat' => 'JL.Kanto',
            'verif' => '',
            'role' => 'admin',
            'join_date' => '2022-08-08',
            'terakhir_login' => '2023-01-08',
            'foto' => '',
        ]);

        User::Create([
            'kode' => 'AA001',
            'nis' => '009808',
            'fullname' => 'Rey Hanma',
            'username' => 'Rey',
            'password' => Hash::make("password"),
            'kelas' => 'XII-RPL',
            'alamat' => 'JL.Sinnoh',
            'verif' => '',
            'role' => 'user',
            'join_date' => '2022-08-08',
            'terakhir_login' => '2023-01-08',
            'foto' => '',
        ]);

        User::Create([
            'kode' => 'AA001',
            'nis' => '009808',
            'fullname' => 'Reynaldy',
            'username' => 'Dy',
            'password' => Hash::make("password"),
            'kelas' => 'XII-RPL',
            'alamat' => 'JL.Sinnoh',
            'verif' => '',
            'role' => 'user',
            'join_date' => '2022-08-08',
            'terakhir_login' => '2023-01-08',
            'foto' => '',
        ]);

        User::Create([
            'kode' => 'AA002',
            'nis' => '009804',
            'fullname' => 'Dzacky Alfie',
            'username' => 'Dzacky',
            'password' => Hash::make("password"),
            'kelas' => 'XII-RPL',
            'alamat' => 'JL.Kinnoh',
            'verif' => '',
            'role' => 'user',
            'join_date' => '2022-08-08',
            'terakhir_login' => '2023-01-08',
            'foto' => '',
        ]);

        User::Create([
            'kode' => 'AA003',
            'nis' => '009805',
            'fullname' => 'Alfie Reynaldy',
            'username' => 'Alfie',
            'password' => Hash::make("password"),
            'kelas' => 'XII-RPL',
            'alamat' => 'JL.Long',
            'verif' => '',
            'role' => 'user',
            'join_date' => '2022-08-08',
            'terakhir_login' => '2023-01-08',
            'foto' => '',
        ]);

        User::Create([
            'kode' => 'Admin2',
            'nis'    => '203910',
            'fullname'    => 'Killlua',
            'username' => 'kill',
            'password'    => Hash::make("password"),
            'kelas'    => 'XII-RPL',
            'alamat' => 'JL.Tokyo',
            'verif'    => '',
            'role' => 'admin',
            'join_date'    => '2022-01-06',
            'terakhir_login' => '2022-01-06',
            'foto' => '',
        ]);

        //KATEGORI
        Kategori::create([
            'kode' => 'Manga',
            'nama' => 'Manga',
        ]);

        Kategori::create([
            'kode' => 'Manhwa',
            'nama' => 'Manhwa',
        ]);

        Kategori::create([
            'kode' => 'Donghua',
            'nama' => 'Donghua',
        ]);

        //PENERBIT
        Penerbit::create([
            'kode' => 'shounenjump',
            'nama' => 'ShounenJump',
        ]);

        Penerbit::create([
            'kode' => 'koreamagazine',
            'nama' => 'KoreaMagazine',
        ]);

        Penerbit::create([
            'kode' => 'chinabook',
            'nama' => 'ChinaBook',
        ]);

        //BUKU
        Buku::create([
            'judul' => '21th Century Boys',
            'kategori_id' => '1',
            'penerbit_id' => '1',
            'pengarang' => 'Naoki Urusawa',
            'tahun_terbit' => '2009',
            //'isbn' =>'',
            'j_buku_baik' => '12',
            'j_buku_rusak' => '4',
            'foto' => 'buku.jpg',
        ]);

        Buku::create([
            'judul' => 'Wind Breaker',
            'kategori_id' => '2',
            'penerbit_id' => '2',
            'pengarang' => 'Yongseok Jo',
            'tahun_terbit' => '2017',
            //'isbn' => '',
            'j_buku_baik' => '20',
            'j_buku_rusak' => '0',
            'foto' => 'buku.jpg',
        ]);

        Buku::create([
            'judul' => 'Mo Dao Zu Shi',
            'kategori_id' => '3',
            'penerbit_id' => '3',
            'pengarang' => 'Mo Xiang Tong Xiu',
            'tahun_terbit' => '2015',
            //'isbn' => '',
            'j_buku_baik' => '1',
            'j_buku_rusak' => '5',
            'foto' => 'buku.jpg',
        ]);

        //PEMINJAMAN
        Peminjaman::create([
            'user_id' => '2',
            'buku_id' => '1',
            'tgl_peminjaman' => '2023-01-06',
            //'tgl_pengembalian' => '',
            'kondisi_buku_saat_dipinjam' => 'baik',
            //'kondisi_buku_saat_dikembalikan' => '',
            //'denda' => '',
        ]);

        Peminjaman::create([
            'user_id' => '3',
            'buku_id' => '2',
            'tgl_peminjaman' => '2021-03-10',
            //'tgl_pengembalian' => '',
            'kondisi_buku_saat_dipinjam' => 'rusak',
            //'kondisi_buku_saat_dikembalikan' => '',
            'denda' => '20000',
        ]);

        Peminjaman::create([
            'user_id' => '1',
            'buku_id' => '2',
            'tgl_peminjaman' => '2023-02-01',
            //'tgl_pengembalian' => '',
            'kondisi_buku_saat_dipinjam' => 'rusak',
            //'kondisi_buku_saat_dikembalikan' => '',
            'denda' => '1000',
        ]);

        //PESAN
        Pesan::create([
            'penerima_id' => '1',
            'pengirim_id' => '2',
            'judul' => 'Buku telah dipinjam',
            'isi' => 'Terimakasih telah meminjam di PerPus',
            'status' => 'terkirim',
            'tgl_kirim' => '2023-01-02',
        ]);

        Pesan::create([
            'penerima_id' => '2',
            'pengirim_id' => '1',
            'judul' => 'Anda Merusakkan Buku',
            'isi' => 'Anda kena denda 20000',
            'status' => 'dibaca',
            'tgl_kirim'=> '2023-01-16',
        ]);

        Pesan::create([
            'penerima_id' => '2',
            'pengirim_id' => '4',
            'judul' => 'Anda Merusakkan Buku',
            'isi' => 'Anda kena denda 1000',
            'status' => 'dibaca',
            'tgl_kirim' => '2023-01-09',
        ]);

        //PEMBERITAHUAN
        Pemberitahuan::create([
            'isi' => 'Maaf server sedang Maintenance',
            //'level_user' => '',
            'status' => 'nonaktif',
        ]);

        Pemberitahuan::create([
            'isi' => 'Maaf PerPus tutup sampai dengan tanggal 29',
            'level_user' => '',
            'status' => 'nonaktif',
        ]);

        Pemberitahuan::create([
            'isi' => 'Pengambilan buku paket sampai tanggal 1',
            //'level_user' => '',
            'status' => 'aktif',
        ]);

        //IDENTITAS
        Identitas::create([
            'nama_app' => 'PERPUS SMKN 10 JAKARTA',
            'alamat_app' => 'JL.SMEAN 6, Cawang, Kramat Jati',
            'email_app' => 'SMKN10JKT@gmail.com',
            'nomor_hp' => '089738278746',
            'foto' => '',
        ]);


    }
}
