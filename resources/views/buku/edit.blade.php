@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Modul</h2>
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

    <form action="{{ route('buku.update',$buku->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul Modul:</strong>
                    <input type="text" name="judul_modul" value="{{ $buku->judul_modul }}" class="form-control" placeholder="Judul Modul">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Modul:</strong>
                    <input type="text" name="kode_modul" value="{{ $buku->kode_modul }}" class="form-control" placeholder="Kode Modul">
                </div>
            </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Modul:</strong>
                    <input type="text" name="jenis_modul" value="{{ $buku->jenis_modul }}" class="form-control" placeholder="Jenis_modul">
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Modul:</strong>
                        <select name="jenis_modul" value="{{ $buku->jenis_modul }}" class="form-control" placeholder="Jenis_modul">
                            <option></option>
                            <option>Fisik</option>
                            <option>Elektronik</option>
                        </select>
                    </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lokasi Modul:</strong>
                    <input type="text" name="lokasi_modul" value="{{ $buku->lokasi_modul }}" class="form-control" placeholder="lokasi_modul">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>File Elektronik:</strong>
                    <input type="file" name="file_elektronik" value="{{ $buku->file_elektronik }}" class="form-control" placeholder="file_elektronik">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
