@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard Admin</div>

                <div class="card-body">                    
                    Selamat Datang {{ Auth::user()->name }} ^^
                </div>
            </div>
        </div>
    </div>
</div>
@endsection