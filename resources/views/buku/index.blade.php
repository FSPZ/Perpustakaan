@extends('layouts.app')

@section('content')
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Modul</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('buku.create') }}"> Create New Modul</a>
            </div>
        </div>
    </div>
    <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Judul Modul</th>
            <th>Kode Modul</th>
            <th>Jenis Modul</th>
            <th>Lokasi Modul</th>
            <th>File Elektronik</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($buku as $i =>$a)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $a->judul_modul }}</td>
            <td>{{ $a->kode_modul }}</td>
            <td>{{ $a->jenis_modul }}</td>
            <td>{{ $a->lokasi_modul }}</td>
            <td>{{ $a->file_elektronik }}</td>
            <td>
                <form action="{{ route('buku.destroy',$a->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('buku.show',$a->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('buku.edit',$a->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
