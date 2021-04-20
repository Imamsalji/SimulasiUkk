@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="mt-2">Pendaftaran</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('update',$show->noreg) }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="tahun_dibayar">Nomor Register</label>
                            <input type="text" class="form-control" value="{{$kode}}" disabled>
                        </div>
                        
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{$show->nama}}">
                        @error('nama')
                            <span class=" text-danger">
                                <strong>{{ message }}</strong>
                            </span>
                        @enderror
                        </div>
    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <select name="jk" id="jk" class="form-control">
                                        <option value="{{$show->jk}}">{{$show->jk}}</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                @error('jumlah')
                                    <span class=" text-danger">
                                        <strong>{{ message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <input type="text" name="agama" class="form-control" value="{{$show->agama}}">
                                @error('agama')
                                    <span class=" text-danger">
                                        <strong>{{ message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="{{$show->alamat}}">
                        @error('alamat')
                            <span class=" text-danger">
                                <strong>{{ message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" class="form-control" value="{{$show->asal_sekolah}}">
                        @error('asal_sekolah')
                            <span class=" text-danger">
                                <strong>{{ message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label for="minat_jurusan">Minat Jurusan</label>
                            <select name="minat_jurusan" id="minat_jurusan" class="form-control">
                                <option value="{{$show->minat_jurusan}}">{{$show->minat_jurusan}}</option>
                                <option value="RPL">Rekayasa Perangkat Lunak</option>
                                <option value="TBG">Tata Boga</option>
                                <option value="TBS">Tata Busana</option>
                                <option value="MMD">Multimedia</option>
                            </select>
                        @error('minat_jurusan')
                            <span class=" text-danger">
                                <strong>{{ message }}</strong>
                            </span>
                        @enderror
                        </div>

                    <hr>
                <button class="btn btn-primary mr-1 text-right" type="submit">Submit</button>
                <button class="btn btn-primary text-right" type="reset">Reset</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
