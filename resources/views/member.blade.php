@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">                    
                    Selamat Datang @if (Auth::user()->role == 1)
                        Admin
                    @else
                        Member
                    @endif ^^
                </div>
            </div>
        </div>
    </div>
</div>
@endsection