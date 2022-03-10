@extends('layouts.app')

@section('content')
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1><strong>D</strong>ata Modul</h1>
        </div>
    </div>
</div>
<br>
<div class="pull-right">
    <a class="btn btn-success" href="{{ route('tabel.index') }}">Cari</a>
</div>
<br>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Judul Modul</th>
        <th>Kode Modul</th>
        <th>Jenis Modul</th>
        <th>Lokasi Modul</th>
        <th>File Elektronik</th>
    </tr>
    @foreach ($cari as $i => $a)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $a->judul_modul }}</td>
        <td>{{ $a->kode_modul }}</td>
        <td>{{ $a->jenis_modul }}</td>
        <td>{{ $a->lokasi_modul }}</td>
        <td>{{ $a->file_elektronik }}</td>
    </tr>
    @endforeach
</table>

@endsection
