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

    public function param($id,$id2)
    {
    	$wow = ['binatang'=>['kucing','hamster','kelinci'],
                'buah'    =>['mangga','sirsak','anggur'  ],
                'komputer'=>['cpu','monitor','mouse'     ]
                 ];
                 
        $kuc = ['kucing anggora','kucing garong','kucing black'];
                 $waw = $wow[$id];
                 $dul = $kuc[$id2];
                 return view('haha', compact('waw','dul','id','id2'));
    
    }



}
