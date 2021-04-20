@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }}</div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>{{$show->nama}}</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td>{{$show->jk}}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td>{{$show->alamat}}</td>
                        </tr>
                        <tr>
                            <th>Agama</th>
                            <td>:</td>
                            <td>{{$show->agama}}</td>
                        </tr>
                        <tr>
                            <th>Asal Sekolah</th>
                            <td>:</td>
                            <td>{{$show->asal_sekolah}}</td>
                        </tr>
                        <tr>
                            <th>Minat Jurusan</th>
                            <td>:</td>
                            <td>{{$show->minat_jurusan}}</td>
                        </tr>
                    </table>
                <a href="{{ route('print',$show->noreg) }}" class="btn btn-outline-info">Print PDF</a>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
