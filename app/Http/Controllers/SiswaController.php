<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;

class SiswaController extends Controller
{
    //
    public function percobaan()
    {
    	$a = siswa::all();
    	return view('siswa', compact('a'));
    }

    public function show ($siswa)
    {
    	$siswa = siswa::find($siswa);
    	return view('siswa', compact('siswa'));
    }
}
