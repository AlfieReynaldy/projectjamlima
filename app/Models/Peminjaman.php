<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjamans';

    // public $fillable = [
    //     "tanggal_peminjaman",
    // ];

    protected $fillable = [
        'user_id',
        'buku_id',
        'tgl_peminjaman',
        'tgl_pengembalian',
        'kondisi_buku_saat_dipinjam',
        'kondisi_buku_saat_dikembalikan',
        'denda'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function bukus(){

    
        return $this->belongsTo(Buku::class);
    }
}
