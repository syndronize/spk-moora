<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){
        $home = DB::table('tb_sub_kriteria')
        ->leftJoin('tb_pengguna','tb_pengguna.id_pengguna','=','tb_sub_kriteria.id_pengguna')
        ->orderBy('id_sub_kriteria')
        ->get();
        return view('backend/home',compact('home'));
    }

}
