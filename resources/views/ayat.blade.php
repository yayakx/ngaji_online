@extends('master_quran')

@section('list')
   <p><a href="../quran" class="btn btn-primary fa fa-arrow-left"> Kembali ke Daftar Surat</a></p>
   <h3 class="bg-success text-light pt-2 pb-2" align="center">{{ $nama }}</h3>
   
   @if(($surat > 1) && ($surat != 9))
        <p class ="arabic_center text-light" align="center">{{ mb_strtolower('بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ') }}</p>
        <hr /><br>
   @endif  
 
   @foreach($data as $d)
        @php
                $str = mb_strtolower($d->arabic);
        @endphp
 
    <br />
    <p class ="arabic text-light" align="right">{{ $str }} {{ $d->ayat }}</p>
    <br><p class="latin text-light">{{ $loop->iteration }} {{$d->indonesia}}</p>
    <hr />
    <br />
   @endforeach
 
   <p class="text-dark" align="center"><a class="btn btn-danger" href="/" >======= Kembali ke Index =======</a></p>
@endsection