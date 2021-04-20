@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="mt-2"><strong>Yang sudah Mendaftar</strong></h3>
                </div>
                <div class="card-body">
                    @if (session('message'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>x</span>
                            </button>
                            {{ session('message') }}
                        </div>
                    </div>
                    @elseif (session('delete'))
                    <div class="alert alert-danger alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>x</span>
                            </button>
                            {{ session('delete') }}
                        </div>
                    </div>
                    @endif

            <table id="table" class="table table-striped table-bordered table-md">
                <thead>
                    <tr>
                        <th>NoRegister</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Agama</th>
                        <th>Asal Sekolah</th>
                        <th>Minat Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($index as $item)
                    <tr> 
                        @if ($rowCount > 0)
                    @if ($item->noreg < 9)
                      <td>0000{{ $item->noreg }}</td>
                    @elseif ($item->noreg < 99)
                      <td>000{{ $item->noreg  }}</td>
                    @elseif ($item->noreg < 999)
                      <td>00{{ $item->noreg }}</td>
                    @elseif ($item->noreg < 9999)
                      <td>0{{ $item->noreg }}</td>
                    @else
                      <td>{{ $item->noreg  }}</td>
                    @endif
                  @endif
                        <td>{{ $item->nama  }}</td>
                        <td>{{ $item->jk  }}</td>
                        <td>{{ $item->alamat  }}</td>
                        <td>{{ $item->agama  }}</td>
                        <td> {{ $item->asal_sekolah  }}</td>
                        <td> {{ $item->minat_jurusan  }}</td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

