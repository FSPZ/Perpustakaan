<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Buku;

class CariController extends Controller
{
    public function index()
{
    $cari = Buku::all();
    return view('cari.index', ['cari' => $cari]);


}
}
