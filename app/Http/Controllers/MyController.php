<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    // passing data basic
    public function percobaan()
    {
    	$a = "WItwiw";
    	return "Nama Saya Adalah ".$a;
    }

    //passing data view
    public function percobaan2()
    {
    	return view('about');
    }

     //passing data variable to view
    public function percobaan3 ()
    {
    	$b ="Gusti F" ;
    	return view('latihan.saya', compact('b'));
    }

    public function bio()
    {
    	$q = "Gusti F";
    	$w = "XI RPL 1";
    	$e = "SMK Asaalaam";
    	return view('latihan.bio', compact('q','w','e'));
    }

    public function percobaan4()
    {
    	$i = 1;
    	$o = 2;
    	$p = 3;
    	return view('seleksi', compact('i','o','p'));
    }

     public function percobaan5()
    {
    	$nomor= 70;
    	$buah = ['mangga','jeruk','apel','anggur'];
    	return view('buah', compact('buah','nomor'));
    }

     public function tugash3()
    {
    	$mahluk    = ['sapi','buaya','kucing','singa','macan'];
    	$buah      = ['mangga','jeruk','apel','anggur','kurma'];
    	$komputer  = ['mouse','keyboard','monitor','cpu','motherboard'];
    	return view('tugash3', compact('buah','mahluk','komputer'));
    }

    public function param($data, $data2 = null)
    {
    	$array = array('binatang'=>['kucing'=>['anggora','persia','black'],
                                    'hamster'=>['hamtaro','hamtari'],
                                    'kelinci'=>['anggora','persia']],

                        'buah'    =>['mangga'=>['harumanis','marijan'],
                                    'sirsak'=>['hijau','hitam'],
                                    'anggur'=>['ungu','hijau']],

                        'komputer'=>['asus'=>['456UR','456'],
                                    'dell'=>['Alienware','Inspiron'],
                                    'acer'=>['6930','7780']]
                 );
                 
                if ($data){
                    $query = (array_keys($array[$data]));
                }
                if ($data2){
                    $query = ($array[$data][$data2]);
                }
                return view('parameter.param1', compact('query','data','data2'));
    
    }



}
