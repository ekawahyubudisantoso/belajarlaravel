<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $pegawai = DB::table('pegawai')->get();

        return view('tampilpegawai',['pegawai' => $pegawai]);
    }
}
