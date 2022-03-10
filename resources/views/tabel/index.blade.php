@extends('layout.app')

@section('content')
<br>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1><strong>D</strong>ata Modul</h1>
        </div>
        <br>
        <br>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('home') }}">Back To Home</a>
        </div>
            <div class="col-md-4">
                <form action="/search" method="get"><br>
                    <div class="input-group custom-search-form">
                        <input type="search" name="search" class="form-control" placeholder="Search Judul Modul.....'-'">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </span>
                    </div>
                </form>
            </div>
    </div>
</div>
<br>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Judul Modul</th>
        <th>Kode Modul</th>
        <th>Jenis Modul</th>
        <th>Lokasi Modul</th>
        <th>Download</th>
        <th>File Elektronik</th>

    </tr>
    @foreach ($tabel as $i => $a)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $a->judul_modul }}</td>
        <td>{{ $a->kode_modul }}</td>
        <td>{{ $a->jenis_modul }}</td>
        <td>{{ $a->lokasi_modul }}</td>
        <td>

        <div class="col-sm">
        <a href="public/assets/{{$a->file_elektronik}}" download="{{$a->file_elektronik}}">
            <button type="button" class="btn btn-primary">
                <i class="glyphicon glyphicon-download">
                    DOWNLOAD
               </i></button>
        </a>
        </div>
        <!-- <a href="{{ $a->file_elektronik}}" download="{{$a->fil_elektronik}}">
			<button type="button" class="btn btn-primary">
				<i class="glyphicon glyphicon-download">
					Download
				</i>
			</button>
		</a> -->
    </td>
        <td>{{ $a->file_elektronik }}</td>
    </tr>
    @endforeach
</table>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tabel.index') }}">Back To Module Data</a>
            </div>

@endsection
