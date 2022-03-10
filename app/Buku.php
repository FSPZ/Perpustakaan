<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $quarded = [];
    protected $table ='bukus';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul_modul' ,
        'kode_modul' ,
        'jenis_modul' ,
        'lokasi_modul' ,
        'file_elektronik',
    ];
}
