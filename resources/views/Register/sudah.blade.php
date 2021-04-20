@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Anda Telah melakukan Register Silahkan Ubah data anda</div>

                <div class="card-body">
                    <a href="{{ route('show',Auth::user()->id) }}" class="btn btn-outline-primary">Show</a>
                    <a href="{{ route('edit',Auth::user()->id) }}" class="btn btn-outline-warning">Edit</a>
                    <a href="{{ route('delete',Auth::user()->id) }}" class="btn btn-outline-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
