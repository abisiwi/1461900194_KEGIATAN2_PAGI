<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    //apabila id bukan integer
    public $incrementing = false;

    //nama tabel
    protected $table = 'ms_kategori';

    //primary field
    protected $primaryKey = 'kode_kategori';

    //isi tabel
    protected $fillable = [
        'kode_kategori',
        'nama_kategori',
      
    ];
    public function buku(){
        return $this->hasMany(buku::class, 'kode_kategori');
    }
}
