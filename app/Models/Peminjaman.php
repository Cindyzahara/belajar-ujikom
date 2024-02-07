<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    // protected $table = "users";
    public $table = "peminjaman";
    protected $guarded = ['id'];
    //memanggil beberapa file ditabel peminjaman
    protected $fillable = [
        'id','user_id','buku_id','TaggalPeminjaman','TaggalPengembalian', 'StatusPeminjaman'
    ];

    //membuat relasi dengan user dengan menerima data
    public function user(){
        return $this->belongsTo(User::class);
    }

    //membuat relasi dengan buku
    public function buku(){
        return $this->belongsTo(Buku::class);
    }
}
