@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Modul</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('buku.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul Modul:</strong>
                <input type="text" name="judul_modul" class="form-control" placeholder="Judul Modul">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Modul:</strong>
                <input type="text" name="kode_modul" class="form-control" placeholder="Kode Modul">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Modul:</strong>
                    <select class="form-control" name="jenis_modul" placeholder="Jenis Modul">
                        <option></option>
                        <option>Fisik</option>
                        <option>Elektronik</option>
                    </select>
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lokasi Modul:</strong>
                <input type="text" name="lokasi_modul" class="form-control" placeholder="Lokasi Modul">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('File Elektronik') }}</label>
                <div class="form-group">
                    <input type="file" class="form-control" name="file_elektronik" >
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>




@endsection
