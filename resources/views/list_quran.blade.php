@extends('master_quran')

@section('list')
<div class="row">
@foreach ($data as $d)           
    <div class="col-md-4 bg-dark sec-calendar">
        <div class="card info-box active">
            <div class="card-body">
                <div class="card-title">                    
                    <div class="row">
                        <a class="btn btn-warning d-flex flex-row col-md-6">Surat #{{$d->index}}</a>
                        <a class="btn btn-success col-md-6 d-flex flex-row-reverse">Diturunkan #{{$d->urutan_pewahyuan}}</a>
                    </div>
                    <hr><h4 class="text-center"><a href="../quran/{{$d->index}}">{{$d->surat_indonesia}}</a></h4>
                </div>
                <div class="card-text">
                     <p>{{$d->arti}}</p>                     
                </div>
                <div class="card-footer bg-success text-light">
                    <p>Jumlah Ayat : {{$d->jumlah_ayat}}</p>
                </div>                
            </div>
        </div><!--.card-->
    </div><!--.col-->            
@endforeach  
</div>  
@endsection
