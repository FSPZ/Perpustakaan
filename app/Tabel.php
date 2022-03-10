<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabel extends Model
{
    protected $quarded = [];
    public $buku = 'Buku';
    protected $primaryKey = 'buku_id';
}
