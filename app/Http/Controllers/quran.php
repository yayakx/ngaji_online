<?php

namespace App\Http\Controllers;

use Request;
use DB;

class quran extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $list = $this->daftar();
        return view('quran', ['list'=> $list]);        
    }  
    
    public function surat($surat){
        mb_internal_encoding('UTF-8'); 
        if (($surat < 1) || ($surat > 114)) return redirect()->back();
        
        $data = DB::select(DB::raw('select A.AyahText as arabic, B.AyahText as indonesia FROM quran A LEFT OUTER JOIN indo B ON A.ID=B.ID WHERE A.SuraID = '.$surat.''));
        
        if($surat == 1)
            $ayat = 1;
        else
            $ayat = 1;
        
        foreach($data as $d){
        $d->ayat = $this->angka($ayat);
        $ayat++;
        }
            
        $daftarSurat = DB::table('daftarsurat')->select('surat_indonesia')->where('index',$surat)->first();
        $nama = $daftarSurat->surat_indonesia;
        return view('ayat')->with('data', $data)->with('nama', $nama)->with('surat', $surat);
        // return view('ayat', ['data'=> $data, 'nama'=> $nama, 'surat' => $surat]);                    
    }  

    public function daftar(){
        mb_internal_encoding('UTF-8');         
        $data = DB::select('select `index`, surat_indonesia, urutan_pewahyuan, arti, jumlah_ayat from daftarsurat');
        return view('list_quran', ['data' => $data]);        
    }

    public function turun(){
        mb_internal_encoding('UTF-8');         
        $data = DB::table('daftarsurat')->orderBy('urutan_pewahyuan','ASC')->get();
        return view('list_quran', ['data' => $data]);        
    }

    public function ayat(){
        mb_internal_encoding('UTF-8');         
        $data = DB::table('daftarsurat')->orderBy('jumlah_ayat','ASC')->get();
        return view('list_quran', ['data' => $data]);        
    }

    public function makkah(){
        mb_internal_encoding('UTF-8');         
        $data = DB::table('daftarsurat')->where('tempat_turun','Mekkah')->get();
        return view('list_quran', ['data' => $data]);        
    }

    public function madinah(){
        mb_internal_encoding('UTF-8');         
        $data = DB::table('daftarsurat')->where('tempat_turun','Madinah')->get();
        return view('list_quran', ['data' => $data]);        
    }
    
    public function thiwal(){
        mb_internal_encoding('UTF-8');         
        $data = DB::table('daftarsurat')->where('thiwal','1')->get();
        return view('list_quran', ['data' => $data]);        
    }
    
    public function angka($number){
        $arabic_number = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩');
        $jum_karakter = strlen($number);
        $temp = "";
        for($i = 0; $i < $jum_karakter; $i++){
            $char = substr($number, $i, 1);
            $temp .= $arabic_number[$char];
        }            
        return '('.$temp.')';
    }

}

